<?php
    #START : Проверка наличия активной сессии
        require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
    #END
        $userWhichSignIn = null;
        if(isset($_SESSION['user']) && is_array($_SESSION['user']) && isset($_SESSION['user']['nickname'])){
            $userWhichSignIn = $_SESSION['user']['nickname'];
        }
        require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
    #START : Markup for admin
        if(isset($_SESSION["user"]["type"]) && $_SESSION["user"]["type"] == "admin"){
			$makeStarWrap = "
				<div class='wrap_ad_elements_css w100 p l tfccb1 u p l c ml15 pa10 br12'>
					<div class='mfa_ad_btn_css'>
						<div class='cwcpi4edit p l w16 h16 bgsz16'><!--icon--></div>
						<div class='h16 lh16 p l ml10 f14'>
							Редактировать
						</div>
					</div>
					<div class='wrap_ad_controls_css w100 p l'>
						<div class='w100 p l mt20 cb'><b>[img] Upload image</b></div>
						<input class='thumbnail_BANNER_js w100 p l mt10 cb' type='file'/>

						<div class='w100 p l mt20 cb'><b>[a href] Insert AD link</b></div>
						<input class='w100 p l mt10' type='text' placeholder='Link' />

						<input class='mt20' type='button' value='Update' onclick='update_AD('A1')' />
					</div>
				</div>
			";
		}
    #END
?>
<!--START : Advertisement-->
	<div class='wrapp_A1_js p l'>
		<!--START : Button [Edit]-->
			<?= $makeStarWrap; ?>
		<!--END-->
		<!--START : A1-->
			<a href='https://t.me/cip_cirip' target='_blank' title='Реклама'>
				<div class='APPEARANCE_ad_js DARK_THEME_COLOR_1 rbarplsbmpb rba p l sh br12 pa bgw'>
					<img loading="lazy" class="banerbarplsbmpbbgsc ba br4" src="../../../../../../src/du/ad/Чип_чирип.png">
				</div>
			</a>
		<!--END-->
	</div>
<!--END-->