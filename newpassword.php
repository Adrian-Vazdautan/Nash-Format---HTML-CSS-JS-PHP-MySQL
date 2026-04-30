<?php
		date_default_timezone_set('Europe/Chisinau');
	#AJAX
		$hash = $_SERVER['QUERY_STRING'];
	#Connect
		require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
	#Query
		$query_if_exist_hash = mysqli_query($connect, "
		    SELECT 1 FROM recover WHERE hash='$hash'
		");
	#Check if hash exist
		if($query_if_exist_hash !== false && mysqli_num_rows($query_if_exist_hash) > 0){
			#Check if link is active
				#Query
				    $query_check_if_not_expired = mysqli_query($connect, "
				        SELECT dateofpublication FROM recover WHERE hash='$hash'
				    ");
				    $row = $query_check_if_not_expired->fetch_assoc();
				#Check
				    #Success
					    if($row){
						        $dateOfPublicationTimestamp = strtotime($row['dateofpublication'] . ' Europe/Chisinau');
						        $currentTimestamp           = time();
						        $timeDifference             = $currentTimestamp - $dateOfPublicationTimestamp;
					        #Check
						        #Link : Not active : 24 hours was went
							        if($timeDifference > 86400){
				        				#ERROR : link is expired
				        					require "404.php";
				        					exit();
							        }
						        #Link : Active
							        else {
							            #Check : status
							            	#Query
											    $query_status = mysqli_query($connect, "
											        SELECT status FROM recover WHERE hash='$hash'
											    ");
											    $query_status = $query_status->fetch_assoc();
											#Check
											    #Success
												    if($query_status){
										        		#status 1 : closed
										        			if($query_status["status"] == "1"){
										        				#ERROR : link is expired
										        					require "404.php";
										        					exit();
										        			}
										        		#status 0 : open
										        			elseif($query_status["status"] == "0"){
										        				#START : close link
										        					#Query
																		$query_close_link = mysqli_query($connect, "
																			UPDATE recover SET status='1' WHERE hash='$hash'
																		");
																	#Success
																		if($query_close_link){

																		} 
																	#Error
																		else {
																			echo "Ошибка при добавлении данных: " . mysqli_error($connect);
																			exit();
																		}
										        				#END
										        			}
												    } 
											    #Error
												    else {
												        echo "Ошибка при получении данных из базы: " . mysqli_error($connect);
														exit();
												    }
							        }
					    } 
				    #Error
					    else {
					        echo "Ошибка при получении данных из базы: " . mysqli_error($connect);
							exit();
					    }
		} else {
			#ERROR : link is expired
				require "404.php";
				exit();
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Think - New password</title>
	<link rel='stylesheet' href='src/path/dt/cs/recovery/css/recovery.css'>
	<script defer src='src/path/dt/cs/recovery/js/recovery.js'></script>
</head>
<body>
	<!--START : Preloader-->
		<?php require_once 'src/path/dt/sy/preloader.php';?>
	<!--END-->
	<!--START : Offline-->
		<?php require_once 'src/path/dt/sy/offline.php';?>
	<!--END-->
	<div class='w100 vh100 dg alc jcc'>
		<div class='wSRIS bgw br12 pa'>
			<!--START : Reset password-->
				<div class='cYTA w100 f24'>
					Reset Password
				</div>
			<!--END-->
			<!--START : New password-->
				<div class='cYTA mt20 w100 f14 fw'>
					New Password
				</div>
				<input type='password' class='iYE mt10 w100 br4 newpassword_js' placeholder='' onclick='r_err_r_newpassword()'>
				<div class='mt10 w100 f14 cr err_r_newpassword_js'></div>
			<!--END-->
			<!--START : Save New Password-->
				<input type='button' class='ib p w100 br4 f14 mt20 c' onclick='saveNewPassword(`<?= $hash; ?>`)' value='Save New Password'>
			<!--END-->
		</div>
	</div>
</body>
</html>