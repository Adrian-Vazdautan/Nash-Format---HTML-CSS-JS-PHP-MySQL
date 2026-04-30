<div class="news_window_WRAP_js">
	<div class="news_window_js sh br12 mb25">
		<!--START : Title-->
			<div class="news_title_js fw">
				НОВОСТИ
			</div>
		<!--END-->
		<!--START : News-->
			<div class="news_items_js">
				<?php
						require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
					#Query
						$getNews = mysqli_query($connect,"
							SELECT id, nickname, title, thumbnail_image, dateofpublication FROM articles WHERE category='current_news_and_events' ORDER BY id DESC LIMIT 5;
						");
					#Show
						$countNews = 0;
						while($News = mysqli_fetch_assoc($getNews)){
							$countNews++;
							echo "
								<!--START : Item news-->
									<div class='item_news_js'>
										<div class='wrap_item_link_news_css'>
											<a class='news_href_css' href='https://think.ceo/article.php?id=".$News['id']."'>
												<div class='newsTitleID'>".$News['title']."</div>
											</a>
											<div class='item_news_DATE_COMMENTS_js'>
												<div class='news_DATE_css p l'>
													"; echo getTimeAgo($News['dateofpublication']); echo "
												</div>
												<div class='news_comments_ICON_css p l'><!--icon--></div>
												<div class='news_comments_COUNTS_css p l'>
												";
													$NewsID  = $News['id'];
						                            $NewsQID = mysqli_query($connect, "
						                            	SELECT count(*) FROM articles_commentary 
						                            	WHERE artID='$NewsID';
						                            ");
						                            $NewsQID = $NewsQID->fetch_row();
						                            echo $NewsQID[0];
												echo "	
												</div>
											</div>
											"; 
											if($countNews != 5){
												echo "<div class='article_NEWS_decor_line_css mobile_none w100 p l h1 bgws'></div>";
											}
											echo "
											<div class='wrap_item_link_news_ICON_css'>
												<img loading='lazy' class='article_image_thumbnail_NEWS_css' src='src/du/thumbnail/".$News['thumbnail_image']."' alt='Image'>
											</div>
										</div>";
											if($countNews != 5){
												echo "<div class='article_NEWS_decor_line_css noneDesk w100 p l h1 bgws'></div>";
											}
										echo "
									</div>
								<!--END-->
							";
						}
				?>
			</div>
		<!--END-->
		<!--START : See more-->
			<div class="news_see_more_js">
				Покажи больше
			</div>
		<!--END-->
		<!--START : All news-->
			<div class="news_all_news_js none">
				Все новости
			</div>
		<!--END-->
	</div>
</div>

<div class='article__decor_line__css w100 p l h1 bgws'>
	<div class='adlcss'></div>
</div>