<?php require "src/languages_search-result-null.php";?>
<!--START-->
	<div class="srnw0js none">
		<!--START-->
			<div class='APPEARANCE_no_result_found_js APPEARANCE_DARK_no_result_found_js sfn6 u p l t sh br12 bgw f24'>
				<?= $languagesLSRNSRN[$selectedLanguage]['no_result_found'];?>
			</div>
		<!--END-->
		<!--START-->
			<div class='APPEARANCE_no_result_found_ADD_ARTICLE_js APPEARANCE_DARK_no_result_found_ADD_ARTICLE_js sfn7 p l bgw br12 pa mt25 mb25 sh'>
				<!--START Text-->
					<?= $languagesLSRNSRN[$selectedLanguage]['did_not_find_what_you_searched'];?>
				<!--END-->
				<!--START Button-->
				  	<div class='id_add_article_js sfn8 u c pal par h35 lh35 ab br50 f14' onclick='addTheArticle()'>
				  		<?= $languagesLSRNSRN[$selectedLanguage]['add_article'];?>
				  	</div>
				<!--END-->
			</div>
		<!--END-->
	</div>
<!--END-->