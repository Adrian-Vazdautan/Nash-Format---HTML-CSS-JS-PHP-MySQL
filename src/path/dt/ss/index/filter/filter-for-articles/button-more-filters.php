<?php require_once "src/languages.php";?>

<!--START : More filters-->
	<div class="p l mt20 mobile_none">
		<!--START : BUTTON Nr: 1-->
			<div class="id_btn_filter_by_nr_8_from_8_js id_btn_f_js rffanr2 APPEARANCE_DARK_rffanr2_js h30 lh30 pal10 par10 sh u bgw p l c f14 br50 btn9js oFBjs" onclick="otherFiltersBtnF()">
				<!--START : Button: Title-->
					<?= $languages[$selectedLanguage]['Morefilters'];?>
				<!--END-->
			</div>
		<!--END-->
		<div class="APPEARANCE_button_more_filter_js APPEARANCE_DARK_button_more_filter_js oFPUjs ab bgw br12 f14 none">
			<!--START : BUTTON Nr: 2-->
				<div class="aIjs p l w100 c" onclick="chooseAdate()">
			        <div class="APPEARANCE_filter_icon_calendar_js APPEARANCE_DARK_filter_icon_calendar_js aidt1 p l w16 h16 bgsc"><!--ICON--></div>
			        <div class="APPEARANCE_filter_calendar_js APPERANCE_DARK_text_css aidt2 p l u">
			           <?= $languages[$selectedLanguage]['chooseAdate'];?>
			        </div>
			    </div>
			<!--END-->
			<!--START : Icon--><div class="dOF ab"><div class="APPEARANCE_icon_arrow_moreFilters_js APPEARANCE_DARK_icon_arrow_articleL_js dEOF"><!--icon--></div></div><!--END-->
		</div>
	</div>
<!--END-->