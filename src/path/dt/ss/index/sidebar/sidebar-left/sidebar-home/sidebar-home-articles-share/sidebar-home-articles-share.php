<?php require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-home/sidebar-home-articles-share/src/languages.php";?>
<div class="uunshas sharejs pf r w100 h100 l0 t0 dg jcc alc none" data-status="open">
	<div class="APPEARANCE_share_js APPEARANCE_DARK_share_js shuunr21 p bgw br12 uunr2js">
		<div class="uunr3 w100 f24 pa p l">
			<!--START-->
				<div class="uunr321 ab c h16 w16" onclick="closeShare()" title="<?= $languages[$selectedLanguage]['close'];?>"><!--icon--></div>
			<!--END-->
			<!--START-->
				<div class="APPEARANCE_article_share_js APPERANCE_DARK_text_css w100 f18">
					<?= $languages[$selectedLanguage]['share'];?>
				</div>
			<!--END-->
			<!--START-->
				<div class="w100 p l mt25 f14">
					<div class="APPEARANCE_share_input_js APPERANCE_DARK_text_css share_input_js w100 h40 p l br50 pal asclicabin lh40"></div>
					<div class="APPEARANCE_share_div_js APPEARANCE_DARK_share_div_css ab asclicab bgw pal br4">
						<div class="p r asclic f14 lh30 u c pal10 par10" onclick="copy_shared_link()">
							<?= $languages[$selectedLanguage]['copyLink'];?>
						</div>
					</div>
				</div>
			<!--END-->
		</div>
	</div>
</div>