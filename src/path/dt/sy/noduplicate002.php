<?php
	echo "
		<div class='center_left_right_js'>
			<div class='center_LR_box_js'>
				<div class='center_LR_all_js'>
					<!--START : Left-->";
					echo "
						<div class='rlfajs l'>
							<!--START : noduplicate002.php-->
								<div class='feed_SLIDER_js mobile_none'>
									"; require "feed_SLIDER.php"; echo "
								</div>
							<!--END-->
					";
						require_once "src/path/dt/ss/index/filter/filter-for-articles.php";
						echo "<div class='fFOA'>";
							require_once "src/path/dt/ss/index/nav/nav-search/search-result-null.php";
							require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-home/sidebar-home-articles/home.php";
						echo "</div>";
					echo "</div>";
				echo "<!--END-->";
				echo "<!--START : Right-->";
					echo "<div class='rrfe l'>";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/ad/ad.php";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/popular-authors/row-window-best-authors.php";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/popular-articles/row-window-read-now.php";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/button-post_an_article_for_free/row-add-new-article-wrapper.php";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/footer/row-footer-1-bottom-publications.php";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/ad/ad_2.php";
						require_once "src/path/dt/ss/index/sidebar/sidebar-right/ad/ad_3.php";
					echo "</div>";
				echo "<!--END-->
				</div>
			</div>
		</div>
	";
?>