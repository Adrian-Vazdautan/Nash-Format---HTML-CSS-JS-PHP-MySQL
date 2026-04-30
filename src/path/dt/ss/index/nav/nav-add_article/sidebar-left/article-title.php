<?php
	require_once "src/article-title/language_article-title.php";
?>
<!--START-->
	<div class="APPEARANCE_article_title_js APPEARANCE_DARK_article_title_js mt20 mb10 f14 fw">
		<?= $languagesLAT[$selectedLanguage]['article_title'];?>
	</div>
	<input class="APPEARANCE_input_title_js APPEARANCE_DARK_input_title_js aitc w100 h35 br12 pal10" type="text" onclick="removeTitleError()">
	<div class="titleErrorjs w100 f14 mt10 cr none"></div>
<!--END-->