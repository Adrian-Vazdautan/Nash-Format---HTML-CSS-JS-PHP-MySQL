<?php
		ini_set('display_errors', 0);
	#Obtain URL and show DATA from bd by ID
		$url = $_SERVER['REQUEST_URI']; #Получение URL страницы
		if(preg_match('/[?&]id(\d+)/', $url, $matches)){
		    $idFromURL = (int) $matches[1]; #Получение числового значения после 'id'
		    #Используйте $idFromURL по вашему усмотрению
		} else {
		    #Если 'id' не найден в URL
		}
	#Required
		require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
	#Obtain nickname by $idFromURL
		$query_get_nickname = mysqli_query($connect, "SELECT nickname FROM users WHERE id='$idFromURL'");
		$query_get_nickname = $query_get_nickname->fetch_row();
?>
<div class="wrapp_n1_user_page_js">
	<div class="wrapp_user_page_js up">
		<div class="p l w100 user_pagejs padpatup_css" data-id-of-user-which-already-is-opened='<?= $idFromURL ?>'>
			<div class="profile_it_1 w100">
				<!--START : HEADER-->
					<div class="br12 ovh sh">
						<!--START : Background-->
							<div class="APPEARANCE_profile_background_js APPEARANCE_DARK_profile_background_js profile_background bgnr bgsc">
								<div class="profile_background_shadow p wi"></div>
								<!--START : AVATAR src/du/avatar/-->
									<div class="uppa z1 ab dg alc jcc">
										<div class="avatar_not_found_js dg alc jcc none"><?= substr($query_get_nickname[0], 0, 1); ?></div>
										<img loading='lazy' class='ru2111i dg alc jcc u none' src=''/>
									</div>
								<!--END-->
							</div>
						<!--END-->
						<div class="APPEARANCE_profile_menu_background_js APPEARANCE_DARK_profile_menu_background_js profile_menu bgw w100">
							<!--START : Nickname-->
								<div class="APPEARANCE_nickname_background_menu_js APPEARANCE_DARK_nickname_background_menu_js ru2112 p l wi bgw f24 t fw">
									<span class="proniusjs">
										<?= $query_get_nickname[0]; ?>
									</span>
								</div>
							<!--END-->
							<!--START : Menu-->
								<div class="APPEARANCE_menu_background_js APPEARANCE_DARK_menu_background_js ru3 p l wi bgw df jcc">
									<div class="APPEARANCE_user_page_menu_js APPEARANCE_DARK_user_page_menu_js ru31 p l f14 fw">
										<?php require_once "src/user-profile-buttons.php";?>
									</div>
								</div>
							<!--END-->
						</div>
					</div>
				<!--END-->
				<!--START : WINDOWS-->
					<div class="p l wi df jcc">
						<div class="ru41 p l">
							<?php require_once "src/user-profile-windows-from-buttons.php";?>
						</div>
					</div>
				<!--END-->
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
	    rowup_3_1_change_window('iru31bb21ar',<?= $idFromURL ?>);
	});
</script>