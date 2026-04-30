<!--START : Mobile Advertisement-->
	<div class='mobile_baner ovh desktop_none mobile_none'>
		<a class="ad_mobile_css_RU" href="advertisement.php" title="Advertisement">
			<?php require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/ss/index/sidebar/sidebar-right/ad/ad_mobile.php");?>
		</a>
	</div>
<!--END-->
<!--START : FILTER FOR ARTICLES [(New/The best) (Day/Week/Month/Year/All time) (More filters)]-->
	<div class="rffanr1js p l mobile_dg_alc_jcc mobile_none">
		<div class="mobile_filter_wrapp">
			<!--START : New/Best-->
				<?php require_once "filter-for-articles/button-new.php";?>
				<?php require_once "filter-for-articles/button-the-best.php";?>
			<!--END-->
			<!--START : Mobile row-->
				<div class="mobile_filter_row">
					<div class="mobile_filter_row_background"></div>
				</div>
			<!--END-->
			<!--START : Day/Week/Month/Year/All time-->
				<?php require_once "filter-for-articles/button-all-time.php";?>
				<?php require_once "filter-for-articles/button-day.php";?>
				<?php require_once "filter-for-articles/button-week.php";?>
				<?php require_once "filter-for-articles/button-month.php";?>
				<?php require_once "filter-for-articles/button-year.php";?>
			<!--END-->
			<!--START : More filters-->
				<?php require_once "filter-for-articles/button-more-filters.php";?>
			<!--END-->
		</div>
	</div>
<!--END-->
<!--START : Mobile Filter-->
	<div class='wfs'>
		<!--START : Sort by--
			<div class='none APPEARANCE_mobile_filter_js APPEARANCE_DARK_mobile_filter_css wfsf br12 u c' onclick="mobile_filter()">
				<div class='APPEARANCE_mobile_filter_title_js APPERANCE_DARK_text_css wfsf1'>
					Sort by
				</div>
				<div class='APPEARANCE_mobile_filter_icon_js APPEARANCE_DARK_mobile_filter_icon_css wfsf0'></div>
			</div>
		<--END--
		<--START : Interval--
			<div class='none APPEARANCE_mobile_filter_js APPEARANCE_DARK_mobile_filter_css wfsf br12 u c' onclick="chooseAdate()">
				<div class='APPEARANCE_mobile_filter_title_js APPERANCE_DARK_text_css wfsf1'>
					Interval
				</div>
				<div class='APPEARANCE_mobile_filter_icon_js APPEARANCE_DARK_mobile_filter_icon_css wfsf0'></div>
			</div>
		<--END--
		<--START : View [Card, Compact]--
			<div class='none APPEARANCE_mobile_filter_js APPEARANCE_DARK_mobile_filter_css wfsf br12 u c' onclick="">
				<div class='APPEARANCE_mobile_filter_title_js APPERANCE_DARK_text_css wfsf1 mficon_css'>

				</div>
				<div class='APPEARANCE_mobile_filter_icon_js APPEARANCE_DARK_mobile_filter_icon_css wfsf0'></div>
			</div>
		<--END-->
		<!--START : Popular categoryes-->
			<div class="mobile_popular_categoryes_js">
				<div class="mobile_wrpcw">
					<div class="mobile_HOME_btn_js p l br50 f14">
						Домой
					</div>
					<div class="mobile_HOME_btn_SECOND_js p l br50 f14 mhbTXTshdw">
						Спорт
					</div>
					<div class="mobile_HOME_btn_THIRD_js p l br50 f14 mhbTXTshdw">
						Развлечение
					</div>
					<div class="mobile_HOME_btn_FOUR_js p l br50 f14 mhbTXTshdw">
						Ображ жизни
					</div>
					<div class="mobile_HOME_btn_FIVE_js p l br50 f14 mhbTXTshdw">
						Игрухи
					</div>
				</div>
			</div>
		<!--END-->
	</div>
<!--END-->