<?php require_once "src/languagesCnct.php";?>
<div class="uunr1js pf r w100 h100 l0 t0 dg jcc alc none" data-status='hidden'>
	<div class="uunr2 p bgw br12 uunr2js">
		<div class="uunr3 w100 f24 paDesk mobile_h100 mobile_ovyss">
			<form class="APPEARANCE_PopUpSignIn_js APPEARANCE_DARK_PopUpSignIn_js formUnauthcss" action="">
				<!--START-->
					<div class="APPEARANCE_unauthorized_js APPERANCE_DARK_text_css mobile_abs z2 w100 mb20 f18 mob_signin">
						<?php echo $languagesCnct[$selectedLanguage]['SignIn'];?>
						<!--START-->
							<div class="uunr321 ab c h16 w16" onclick="cuunr1()" title="<?php echo $languagesCnct[$selectedLanguage]['Close'];?>"><!--icon--></div>
						<!--END-->
					</div>
				<!--END-->
				<!--START-->
					<div class="mob_input_username">
						<div class="APPEARANCE_unauthorized_in_us_js APPERANCE_DARK_text_css pun w100 f14 ">
							<?php echo $languagesCnct[$selectedLanguage]['UsernameOrEmail'];?>
						</div>
						<input type="text" class="c_l_usernamejs w100 br4 mt10 risbs f14" name="username" autocomplete="on" onkeydown="signInhandleKeyPress(event, 0)" onclick="redisbs_c_username(0)" title="Username or Email">
						<div class="mt10 w100 f14 cr err_c_usernamejs none"></div>
					</div>
				<!--END-->
				<!--START-->
					<div class="mob_input_password">
						<div class="APPEARANCE_unauthorized_in_pass_js APPERANCE_DARK_text_css pp w100 f14 mt20 ">
							<?php echo $languagesCnct[$selectedLanguage]['Password'];?>
						</div>
						<input type="password" class="c_k_passwordjs w100 br4 mt10 risbs f14" name="password" onkeydown="signInhandleKeyPress(event, 0)" onclick="redisbs_c_password(0)" title="Password">
						<div class="mt10 w100 f14 cr err_c_passwordjs"></div>
					</div>
				<!--END-->
				<div class="pfpjs w100 f14 mt20 c u noneDesk" onclick="forgotPasswordWindow()">
							<?php echo $languagesCnct[$selectedLanguage]['RecoverAccess'];?>
				</div>
				<!--START-->
					<div class="mob_btn_signin">
						<input type="button" class="btn_PUWC_signin_nr_2_js signin_appearance_light_nr_2 ib p w100 br4 f14 mt20 c" onclick="authorizeUser(0)" value="<?php echo $languagesCnct[$selectedLanguage]['SignIn'];?>">
					</div>
				<!--END-->
				<!--START-->
					<div class="mob_btn_recover_create">
						<div class="APPEARANCE_unauthorized_recoverAccess_js APPERANCE_DARK_text_css pfpjs w100 f14 mt20 c u mobile_none" onclick="forgotPasswordWindow()">
							<?php echo $languagesCnct[$selectedLanguage]['RecoverAccess'];?>
						</div>
						<div class="APPEARANCE_unauthorized_createAccount_js APPERANCE_DARK_text_white_btn_css prjs c mt10 f14 w100 u mobile_create_account" onclick="registrationWindow()">
							<?php echo $languagesCnct[$selectedLanguage]['CreateAccount'];?>
						</div>
					</div>
				<!--END-->
				<!--START : [MOBILE] Sign in footer-->
					<div class="noneDesk mobile_unauthorized_footer">
						<!--START : languages-->
							<div class="mobile_lang w100 p l">
								<div class="p l t w50 f14">
									<p onclick="puwlc(0, 'English')">Я русский</p>
									<p onclick="puwlc(1, 'Spanish')">Spanish</p>
									<p onclick="puwlc(2, 'French')">French</p>
									<p onclick="puwlc(3, 'Turkish')">Turkish</p>
									<p onclick="puwlc(4, 'Portuguese')">Portuguese</p>
								</div>
								<div class="p l t w50 f14">
									<p onclick="puwlc(5, 'Romanian')">Romanian</p>
									<p onclick="puwlc(6, 'Dutch')">Dutch</p>
									<p onclick="puwlc(7, 'Polish')">Polish</p>
									<p onclick="puwlc(8, 'Ukrainian')">Ukrainian</p>
									<p onclick="">Russian</p>
								</div>
							</div>
						<!--END-->
						<!--START : mini footer-->
							<div class="w100 p l pal par">
								<?php require($_SERVER['DOCUMENT_ROOT'] . '/src/path/dt/ss/index/sidebar/sidebar-right/footer/src/languagesRF1BP.php'); ?>
								<!--START : Footer-->
									<div class="t p l w100 mt25 mb25 f12">
										<?php echo $languagesRF1BP[$selectedLanguage]['RF1BP'];?>
										<br>
										<p class="mmftxt mt10 f14">
											© 2024 Адриан Вэздэуцан
										</p>
									</div>
								<!--END-->
							</div>
						<!--END-->
					</div>
				<!--END-->
			</form>
		</div>
	</div>
</div>