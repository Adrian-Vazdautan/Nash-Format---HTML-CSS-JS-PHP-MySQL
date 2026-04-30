<?php require_once "src/languagesCnct.php";?>
<!--START : Button[Sign In]-->
	<div class="tcjs p l ml40 fw t f14 c thcjs appearance_PUWC_light u appearance_PUWC_2_light" onclick="showPopUpConect()">
		<?php echo $languagesCnct[$selectedLanguage]['SignIn'];?>
	</div>
<!--END-->

<!--START : Form[Connect]-->
	<div class="APPEARANCE_SignIn_js APPEARANCE_DARK_SignIn_js pUWCjs puwcn1js ab bgw pa br12 none">
		<form action="">
			<!--START : Username or Email-->
				<div class="APPEARANCE_connectFormUSERNAMEorEMAIL_js APPEARANCE_DARK_connectFormUSERNAMEorEMAIL_js pun w100 f14">
					<?php echo $languagesCnct[$selectedLanguage]['UsernameOrEmail'];?>
				</div>
				<input type="text" class="c_l_usernamejs w100 br4 mt10 risbs" name="username" autocomplete="given-name" onkeydown="signInhandleKeyPress(event, 1)" onclick="redisbs_c_username(1)" title="Username or Email">
				<div class="mt10 w100 f14 cr err_c_usernamejs none"></div>
			<!--END-->
			<!--START : Password-->
				<div class="APPEARANCE_connectFormPASSWORD_js APPEARANCE_DARK_connectFormPASSWORD_js pp w100 f14 mt20">
					<?php echo $languagesCnct[$selectedLanguage]['Password'];?>
				</div>
				<input type="password" class="c_k_passwordjs w100 br4 mt10 risbs" name="password" onkeydown="signInhandleKeyPress(event, 1)" onclick="redisbs_c_password(1)" title="Password">
				<div class="mt10 w100 f14 cr err_c_passwordjs"></div>
			<!--END-->
			<!--START : Button[Sign In]-->
				<input type="button" class="btn_PUWC_signin_js p w100 br4 f14 mt20 c signin_appearance_light" onclick="authorizeUser(1)" value="<?php echo $languagesCnct[$selectedLanguage]['SignIn'];?>">
			<!--END-->
			<!--START : Recover access-->
				<div class="APPEARANCE_recoverAccess_js APPEARANCE_DARK_recoverAccess_js pfpjs w100 f14 mt20 c u" onclick="forgotPasswordWindow()">
					<?php echo $languagesCnct[$selectedLanguage]['RecoverAccess'];?>
				</div>
			<!--END-->
			<!--START : Create account-->
				<div class="APPEARANCE_createAccount_js APPEARANCE_DARK_createAccount_js prjs c mt10 f14 w100 u" onclick="registrationWindow()">
					<?php echo $languagesCnct[$selectedLanguage]['CreateAccount'];?>
				</div>
			<!--END-->
			<!--START : Icon-->
				<div class="pudo ab"><div class="APPEARANCE_puwcpi_js APPEARANCE_DARK_puwcpi_js pude ab bgw"><!--icon--></div></div>
			<!--END-->
		</form>
	</div>
<!--END-->