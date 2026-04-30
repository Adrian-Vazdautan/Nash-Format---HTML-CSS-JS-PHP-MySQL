<?php require_once "src/path/dt/ss/index/nav/nav-sign_in-recover_access/src/languages.php";?>
<!--START : Form[Restore access]-->
	<div class="fpis0 pf w100 h100 dg alc jcc l0 t0 fPISjs none" data-status="hidden">
		<div class="APPEARANCE_forgot_password_js APPEARANCE_DARK_forgot_password_js wNfPISjs p l pa bgw br12">
			<!--START : Button[Close]-->
				<div class="ncbfauf1 w16 h16 ab c" title="<?= $languages[$selectedLanguage]['close'];?>" onclick="closeforgotPasswordWindow()"><!--icon--></div>
			<!--END-->
			<!--START : Restoring access-->
				<div class="APPEARANCE_restoringAccessFP_js APPEARANCE_DARK_restoringAccessFP_js fPYTA p f18 w100">
					<?= $languages[$selectedLanguage]['restoringAccess'];?>
				</div>
			<!--END-->
			<!--START : Email-->
				<div class="mt20 f14">
					<?= $languages[$selectedLanguage]['mail'];?>
				</div>
				<input type="email" name="restoreAccessId" class="fprmtijs h32 pal10 p w100 br4 f14 mt10 risbs oun" onclick="redisbs_f_access()" placeholder="<?= $languages[$selectedLanguage]['mailBoxName'];?>" name="email">
				<div class="mt10 w100 f14 cr err_f_accessjs"></div>
			<!--END-->
			<!--START : Button[Restore]-->
				<input type="submit" class="appearance_CORRB_js fPrN h32 p w100 br4 f14 c" onclick="rafp()" value="<?= $languages[$selectedLanguage]['restore'];?>">
			<!--END-->
			<!--START : Button[Cancel]-->
				<input type="submit" class="fPOr h32 p w100 br4 mt10 bgw f14 c" onclick="closeforgotPasswordWindow()" value="<?= $languages[$selectedLanguage]['cancel'];?>">
			<!--END-->
		</div>
	</div>
<!--END-->