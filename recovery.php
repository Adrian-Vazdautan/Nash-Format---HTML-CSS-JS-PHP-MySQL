<?php
	#START : Проверка наличия активной сессии
        if(session_status() == PHP_SESSION_NONE){
            #Если сессия не запущена, запустить новую сессию
            	session_start();
        }
    #END
	if(isset($_SESSION["user"])){
		header("Location: ../auth/auth.php");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Think - Recovery</title>
	<link rel="stylesheet" href="src/path/dt/cs/recovery/css/recovery.css">
	<script defer src="src/path/dt/cs/recovery/js/recovery.js"></script>
</head>
<body>
	<!--START Preloader-->
		<?php require_once "src/path/dt/sy/preloader.php"; ?>
	<!--END-->
	<!--START Offline-->
		<?php require_once "src/path/dt/sy/offline.php"; ?>
	<!--END-->
	<div class="w100 vh100 dg alc jcc">
		<div class="wSRIS bgw br12 pa">
			<!--START-->
				<div class="cYTA w100 f24">
					Restoring access
				</div>
			<!--END-->
			<!--START-->
				<div class="cYTA mt20 w100 f14 fw">
					Mail
				</div>
				<input type="email" class="iYE mt10 w100 br4" name="email" placeholder="MailBox Name">
			<!--END-->
			<!--START-->
				<input type="button" class="ib p w100 br4 f14 mt20 c" onclick="authorizeUser()" value="Restore">
			<!--END-->
		</div>
	</div>
</body>
</html>