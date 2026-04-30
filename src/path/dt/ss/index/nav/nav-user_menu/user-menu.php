<?php require_once "src/languages.php";?>
<!--START-->
	<div class="APPEARANCE_user_menu_js APPEARANCE_DARK_user_menu_js aPUMjs ab f14 br12 bgw pat10 pab10 none">
		<!--START : Button[My profile]-->
			<div class="APPEARANCE_user_menu_btn_MyProfile_js APPEARANCE_DARK_user_menu_btn_hov_css apumb u w100 user_menu_h57 pal10 par10 c" onclick="goToProfile(<?php echo $_SESSION['user']['id'];?>,`<?php echo $_SESSION['user']['nickname'];?>`)">
				<div class="APPEARANCE_um_icon_myProfile_js APPEARANCE_DARK_um_icon_myProfile_js apumb1 p l bgsz16 bgnr mpi1"><!--icon--></div>
				<div class="APPEARANCE_user_menu_myProfile_js APPERANCE_DARK_text_css p l user_menu_lh57">
					<?= $languagesUserMenu[$selectedLanguage]['myProfile'];?>
				</div>
			</div>
		<!--End-->
			<div class="mt5 mb5 w100 h1 pal par mpalpar"><div class="bgws w100 h1"><!--hr--></div></div>
		<!--START : Button[Dark theme]-->
			<div class="apumb u w100 user_menu_h57 pal10 par10 c none" onclick="changeAppearance()">
				<div class="id_appearance_user_menu_icon apumb1 p l bgsz16 bgnr mpi2"><!--icon--></div>
				<div class="p l user_menu_lh57">
					<!--START : Dark Theme-->
						<div class="id_btn_user_menu_dark_js">
							<?= $languagesUserMenu[$selectedLanguage]['darkTheme'];?>
						</div>
					<!--END-->
					<!--START : Light Theme-->
						<div class="id_btn_user_menu_light_js none">
							<?= $languagesUserMenu[$selectedLanguage]['lightTheme'];?>
						</div>
					<!--END-->
				</div>
			</div>
		<!--END-->
		<!--START : Button[Settings]-->
			<div class="APPEARANCE_user_menu_btn_MyProfile_js APPEARANCE_DARK_user_menu_btn_hov_css apumb u w100 user_menu_h57 pal10 par10 se wPPcjs c" onclick="uMWPU('0')">
				<div class="APPEARANCE_icon_settings_js APPEARANCE_DARK_icon_settings_css apumb1 p l bgsz16 bgnr mpi4"><!--icon--></div>
				<div class="APPEARANCE_user_menu_settings_js APPERANCE_DARK_text_css p l user_menu_lh57">
					<?= $languagesUserMenu[$selectedLanguage]['settings'];?>
				</div>
			</div>
		<!--END-->
		<!--START : Button[Help]-->
			<a href="help.php">
				<div class="APPEARANCE_user_menu_btn_MyProfile_js APPEARANCE_DARK_user_menu_btn_hov_css apumb u w100 user_menu_h57 pal10 par10 he wPPcjs">
					<div class="APPEARANCE_user_menu_icon_help_js APPEARANCE_DARK_user_menu_icon_help_css apumb1 p l bgsz16 bgnr mpi6"><!--icon--></div>
					<div class="APPEARANCE_user_menu_help_js APPERANCE_DARK_text_css p l user_menu_lh57">
						<?= $languagesUserMenu[$selectedLanguage]['help'];?>
					</div>
				</div>
			</a>
		<!--END-->
			<div class="mt5 mb5 w100 h1 pal par mpalpar"><div class="bgws w100 h1"><!--hr--></div></div>
		<!--START : Button[Sign out]-->
			<div class="APPEARANCE_user_menu_btn_MyProfile_js APPEARANCE_DARK_user_menu_btn_hov_css apumb u w100 user_menu_h57 pal10 par10 c" onclick="logOut()">
				<div class="APPEARANCE_user_menu_icon_sign_out_js APPEARANCE_DARK_user_menu_icon_sign_out_css apumb1 p l bgsz16 bgnr mpi7"><!--icon--></div>
				<div class="APPEARANCE_user_menu_signout_js APPERANCE_DARK_text_css p l user_menu_lh57">
					<?= $languagesUserMenu[$selectedLanguage]['signOut'];?>
				</div>
			</div>
		<!--END-->
	    <!--START : icon--><div class="pusermenu pudo ab"><div class="APPEARANCE_icon_arrow_user_menu_js APPEARANCE_DARK_icon_arrow_user_menu_css pude bgw ab"><!--icon--></div></div><!--END-->
	</div>
<!--END-->