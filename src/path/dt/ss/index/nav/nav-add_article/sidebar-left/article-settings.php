<?php
	require "src/article-settings/language_article-settings.php";
?>
<!--START-->
	<div class="p l w100 mt20">
		<div class="w100 h18 lh18 mt10">
			<div class="p l w18 h18">
				<input class="w18 h18 asscbjs" type="checkbox" checked>
			</div>
			<div class="APPEARANCE_add_article_notifications_js APPEARANCE_DARK_add_article_notifications_js p l w18 h18 f14 ml10">
				<?= $languagesLASNS[$selectedLanguage]['notifications'];?>
			</div>
		</div>
	</div>
<!--END-->