<?php
	$numarul++;#numarul is required
	if(isset($_SESSION["user"]["type"]) && $_SESSION["user"]["type"] == "admin"){
		$makeStarWrap = "
		    <!--START : Make Star-->
		        <div class='buufjs aC c h40' onclick='unauthorized(".$article['id'].$IDWWRA."), makeStar(".$article['id'].$IDWWRA.")'>
	        		<!--START : Icon-->
			            <div class='ac1 p l h40 w16 dg alc'>
			        		<div class='APPEARANCE_articleLMakeStarIcon_js makeStar_css'></div>
			            </div>
	        		<!--END-->
		        	<!--START : Title-->
				        <div class='APPEARANCE_articleLMakeStar_title_js p l pal10 h40 lh40 arcm'>
							Подталкнуть
				        </div>
		            <!--END-->
		        </div>
			<!--END-->
		    <!--START : Make Recommended-->
		        <div class='buufjs aC c h40' onclick='unauthorized(".$article['id'].$IDWWRA."), makeRecommended(".$article['id'].$IDWWRA.")'>
	        		<!--START : Icon-->
			            <div class='ac1 p l h40 w16 dg alc'>
			        		<div class='APPEARANCE_articleLMakeRecommendedIcon_js makeRecommend_css'></div>
			            </div>
	        		<!--END-->
		        	<!--START : Title-->
				        <div class='APPEARANCE_articleLMakeRecommended_title_js p l pal10 h40 lh40 arcm'>
							Рекомендую
				        </div>
		            <!--END-->
		        </div>
			<!--END-->
		";
	} else { $makeStarWrap = ""; }
	#START : Edit
		#START : Hide/Complain
			$markup_article_option_Hide_Complain = "
			<!--START : Button Hide post-->
			    <div class='buufjs aC c h40' onclick='unauthorized(".$article['id'].$IDWWRA."), hidePost(".$article['id'].$IDWWRA.")'>
	            	<!--START : Icon-->
			            <div class='ac1 p l h40 w16 dg alc'>
			        		<div class='APPEARANCE_articleLForbbiden_js APPEARANCE_DARK_articleLForbbiden_js ac1ico'></div>
			            </div>
	        		<!--END-->
		        	<!--START : Title-->
				        <div class='APPEARANCE_articleLTextForbbiden_js APPEARANCE_DARK_articleLTextForbbiden_js p l pal10 h40 lh40 arcm'>
				        	".$languagesArticle[$selectedLanguage]['HidePost']."
				        </div>
		            <!--END-->
		        </div>
		    <!--END-->
		    <!--START : Button Complain-->
		        <div class='buufjs aC c h40' onclick='unauthorized(".$article['id'].$IDWWRA."), complain(".$article['id'].$IDWWRA.")'>
	        		<!--START : Icon-->
			            <div class='ac1 p l h40 w16 dg alc'>
			        		<div class='APPEARANCE_articleLComplain_js APPEARANCE_DARK_articleLComplain_js ac1icoCompl'></div>
			            </div>
	        		<!--END-->
		        	<!--START : Title-->
				        <div class='APPEARANCE_articleLreport_js APPEARANCE_DARK_articleLreport_js p l pal10 h40 lh40 arcm'>
							".$languagesArticle[$selectedLanguage]['Complain']."
				        </div>
		            <!--END-->
		        </div>
			<!--END-->". $makeStarWrap;

			
			
		#END
		#START : Delete
			$markup_article_option_delete = "
			<!--START : Button Delete-->
		        <div class='buufjs aC c h40' onclick='deletePost(".$article['id'].$IDWWRA.")'>
	        		<!--START : Icon-->
			            <div class='ac1 p l h40 w16 dg alc'>
			        		<div class='APPEARANCE_articleL_option_delete_js APPEARANCE_DARK_articleL_option_delete_css ac1icopDel'></div>
			            </div>
	        		<!--END-->
		        	<!--START : Title-->
				        <div class='APPEARANCE_articleL_option_title_delete_js APPERANCE_DARK_text_css p l pal10 h40 lh40 arcm'>
							".$languagesArticle[$selectedLanguage]['Delete']."
				        </div>
		            <!--END-->
		        </div>
			<!--END-->". $makeStarWrap;
		#END
		#START : UNDO
			$markup_article_option_undo = " 
			<div class='APPEARANCE_undo_option_js APPEARANCE_DARK_undo_option_js tosrjs p l w100 bgw pa sh br12 mb25 none tosrID".$article['id'].$IDWWRA."'>
				<span class='APPEARANCE_articleL_option_removed_js APPERANCE_DARK_text_css rw1s p l f14 fw'>
					".$languagesArticle[$selectedLanguage]['ArticleRemoved']."
				</span>
				<div class='APPEARANCE_articleL_option_removed_btn_js APPERANCE_DARK_text_css id_undo_appearance_js rw2b c p fw f14' onclick='rw2bUndo(".$article['id'].$IDWWRA.")'>
					".$languagesArticle[$selectedLanguage]['UNDO']."
				</div>
			</div>";
		#END
		#START : UNDO-DELETED
			$markup_article_option_undo_deleted = " 
			<div class='tosr_removed_js p l w100 bgw pa sh br12 mb25 none tosr_removed_ID".$article['id'].$IDWWRA."'>
				<span class='rw1s p l f14 fw'>
					".$languagesArticle[$selectedLanguage]['articleDeleted']."
				</span>
				<div class='id_undo_removed_appearance_js rw2b c p fw f14' onclick='rw2bUndoRemoved(".$article['id'].$IDWWRA.")'>
					".$languagesArticle[$selectedLanguage]['RECOVER']."
				</div>
			</div>";
		#END
		#Get
			$article_author_nickname  = $article['nickname'];
		#START : Check
			#Delete
				if($article_author_nickname == $userWhichSignIn){
					#ECHO
						$echo_markup_article_option = $markup_article_option_delete;
						$echo_markup_article_undo   = $markup_article_option_undo_deleted;
				}
			#Hide/Complain
				else if($article_author_nickname != $userWhichSignIn){
					#ECHO
						$echo_markup_article_option = $markup_article_option_Hide_Complain;
						$echo_markup_article_undo   = $markup_article_option_undo;
				}
			#Session : false
				else {
					#ECHO
						$echo_markup_article_option = $markup_article_option_Hide_Complain;
						$echo_markup_article_undo   = $markup_article_option_undo;
				}
		#END
	#END
	#START : Window news
		if(isset($filter__menu) && $filter__menu !== null){
			if($numarul == 2){
				if($page == 1){
					require "news.php";
				}
			}
		}
	#END
	echo
	"<!--SEVEN 7-->
	<!--START : Article-->
		<div class='mobile_plaid_css p l articleID'>
			<!--START Hide post. Complain-->
				<div class='mobile_hide_post_js mobile_hpID".$article['id'].$IDWWRA." none'>
					<div class='APPEARANCE_hidePostComplain_js APPEARANCE_DARK_hidePostComplain_js rWPUjs none ab bgw f14 br12 u rwpuID".$article['id'].$IDWWRA."'>
						". $echo_markup_article_option ."
						<div class='pudorWPU ab w20'><div class='APPEARANCE_icon_arrow_articleL_js APPEARANCE_DARK_icon_arrow_articleL_js pudeb ab bgw'><!--icon--></div></div>
					</div>
				</div>
			<!--END-->
			<div class='p l arws tosf".$article['id'].$IDWWRA."js'>
			<!--START : Widget Hide post-->
				". $echo_markup_article_undo ."
			<!--END-->
			<div class='APPEARANCE_article_js DARK_THEME_COLOR_1 p l w100 pa mobile_pa_css mb25 bgw sh br12 tosaID".$article['id'].$IDWWRA."'>
				<div class='mobile_rwwid roW1 w100'>
					<div class='mobile_article_title_js w100 p f18 mb20 noneDesk'>ARTICLE</div>
					<div class='mobile_wplmid w100 p l mb10'>
						<div class='p l'>
							<!--START : Author avatar-->
								<div class='u widgetcommentid'>";
									#Get avatar, background, and nickname using ID
									    $query = mysqli_query($connect, "
									        SELECT avatar, background, nickname
									        FROM users
									        WHERE nickname = '".$article['nickname']."'
									    ");
									    
									    if($profile_user = mysqli_fetch_assoc($query)){
									        $isp_Avatar     = $profile_user['avatar'];
									    }
									#Check if image is NOT stored in BD
									    if($isp_Avatar == ""){
									    	$Show_Avatar = "<div class='image_avatar_css p l dg alc jcc br50 cw'>".substr($article['nickname'], 0, 1)."</div>";
									    } 
									#Check if image is stored in BD
										else if($isp_Avatar != "" && $isp_Avatar != NULL){
											#START : Obtain image_name.png from bd
												/*Query->*/ $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='".$article['nickname']."'");
												/*Result->*/$query_image_name = $query_image_name->fetch_row();
										        #Check if query was successfull
										            if($query_image_name){
										                #Запрос выполнен успешно 
									    					$Show_Avatar = "<img loading='lazy' class='wUI' src='src/du/avatar/". $query_image_name[0] ."'/>";
										            } else {
										                #В случае ошибки
										            }
											#END
									    }
									#Show avatar
									    echo $Show_Avatar;
									echo "
								</div>
							<!--END-->
						</div>
						<!--START : Username-->
							<div class='p l'>"; 
								/*Query->*/ $userID = mysqli_query($connect, "SELECT id FROM users WHERE nickname='".$article['nickname']."'");
								/*Result->*/$userID = $userID->fetch_row();
							 echo "
								<div class='ml10 f14 c aas wsupjs' onclick='wshowUserProfile(".$userID[0].",`".$article['nickname']."`)'>
									".$article['nickname']."
								</div>
							</div>
						<!--END-->
						<!--START : Date-->
							<div class='APPEARANCE_date_js APPEARANCE_DARK_date_js p l ml10 f14 cs'>
								"; echo getTimeAgo($article['dateofpublication']); echo "
							</div>
						<!--END-->
					<!--START : Button-->
						<div class='APPEARANCE_articleLButton_js APPEARANCE_DARK_articleLButton_js p r h30 w30 dg alc jcc br50 c cw4srtm cw4srtmnr".$article['id'].$IDWWRA."' onclick='rowWindowPopUpFunction(".$article['id'].$IDWWRA.")'>
							<div class='cW4SRTMjs'>
								<div class='APPEARANCE_dC1_js APPEARANCE_DARK_dc123_js dC1'><!--icon--></div>
								<div class='APPEARANCE_dC2_js APPEARANCE_DARK_dc123_js dC2'><!--icon--></div>
								<div class='APPEARANCE_dC3_js APPEARANCE_DARK_dc123_js dC3'><!--icon--></div>
							</div>
						</div>
					<!--END-->

						</div>
				</div>
				<!--START : Title-->
					<a href='https://think.ceo/article.php?id=".$article['id']."' target='_blank' class='show_article_in_extended_mode_js f24 mt20 c fw articleLink mobile_pa_title_css mobile_none' title='".$article['title']."'>
						".$article['title']."
					</a>
				<!--END-->
				<!--START : Tags-->
					<div class='article_TAGS_js p l w100'>
						<div class='wrap_basic_data_js p l'>
							<div class='article_AVG_READING_icon_js'></div>
							<div class='article_AVG_READING_count_js'>".$article['reading_time']." минут</div>
						</div>";
							// Выполнение запроса
								$query_acv = mysqli_query($connect, "SELECT COUNT(*) AS count FROM history WHERE id_of_article='".$article['id']."'");
							// Извлечение результата
								$count_views = mysqli_fetch_assoc($query_acv)['count'];
						echo "
						<div class='wrap_basic_data_js p l'>
							<div class='article_VIEWS_icon_js'></div>
							<div class='article_VIEWS_count_js'>".$count_views." просмотров</div>
						</div> 
					</div>
				<!--END-->
				<!--START : Thumbnail-->
					<div class='article_thumbail_js'>
						<img loading='lazy' class='article_image_thumbnail_css' src='src/du/thumbnail/".$article['thumbnail_image']."' title='Image'>
						<div class='article_image_thumbnail_TITLE_css p l w100'>
							".$article['thumbnail_description']."
						</div>
					</div>
				<!--END-->
				<!--START : Title-->
					<div class='show_article_in_extended_mode_js f24 mt20 c fw articleLink mobile_pa_title_css noneDesk' onclick='show_article_in_extended_mode(".$article['id'].")'>
						".$article['title']."
					</div>
				<!--END-->
				<div class='article_text_".$article['id'].$IDWWRA." article_text_hidden_js rW5 p l w100 mt20 f18 mobile_none'>
					<!--START : Content-->
						<div class='content_textarea_js p l w100 content_ID".$article['id'].$IDWWRA."'>
							".$article['textarea']."
						</div>
					<!--END-->
					<!--START : Shadow for text-->
						<div class='APPEARANCE_aaaw_js APPEARANCE_DARK_article_shadow_for_text_js asft_id_".$article['id'].$IDWWRA." article_shadow_for_text_js ab w100'></div>
					<!--END-->
					<!--START : Show less-->
						<div class='showLessCss c p l w100 none watShowLessID".$article['id'].$IDWWRA."' onclick='recoverButtonShowAll(".$article['id'].$IDWWRA.")'>
							Показать меньше
						</div>
					<!--END-->
				</div>
				<div class='wGTRjs w100 p l mt20 wgtrbtnID".$article['id'].$IDWWRA." mobile_none'>
					<!--START : Button-->
						<button type='button' class='APPEARANCE_continue_reading_js APPEARANCE_DARK_wGTR_js wGTR p l f14 fw c shg' onclick='showAll(".$article['id'].$IDWWRA.",`".$code."`)'>
							".$languagesArticle[$selectedLanguage]['ContinueReading']." →
						</button>
					<!--END-->
				</div>
				<div class='p l w100 mt20 mobile_pa_controls_css'>
					<!--START : Button Comment-->
						<div class='APPEARANCE_comment_js APPEARANCE_DARK_cls_js tfccb1 u p l c br12 pa10' id='cwcp".$article['id'].$IDWWRA."' onclick='showComments(".$article['id'].$IDWWRA.",`1`)' title='".$languagesArticle[$selectedLanguage]['Comments']."'>
							<div class='APPEARANCE_comment_ICON_js APPEARANCE_DARK_comment_ICON_js cwcpi p l bgsz16 w16 h16'><!--icon--></div>
							<div class='h16 lh16 p l ml10 f14'>".$countOfcomments[0]."</div>
							<div class='ab w100 mlm10 decorID".$article['id'].$IDWWRA."'><!--icon--></div>
						</div>
					<!--END-->
					<!--START : Button Like-->
						<div class='APPEARANCE_like_js APPEARANCE_DARK_cls_js tfccb1 u cwcpi3js p l c ml15 pa10 br12' onclick='setLS(".$article['id'].$IDWWRA.")'>
							<div class='p l w16 h16 hlikeStatusjsID".$article['id'].$IDWWRA."' title='".$languagesArticle[$selectedLanguage]['ILikeThis']."'>
								".$likeStatus."
							</div>
							<div class='h16 lh16 p l ml10 f14 counthlikeStatusjsID".$article['id'].$IDWWRA."'>".$cal[0]."</div>
						</div>
					<!--END-->
					<!--START : Button Share-->
						<div class='APPEARANCE_share_js APPEARANCE_DARK_cls_js tfccb1 u p l c ml15 pa10 br12 cwcp1share".$article['id'].$IDWWRA."' onclick='share_this(".$article['id'].")' title='".$languagesArticle[$selectedLanguage]['Share']."'>
							<div class='APPEARANCE_cwcpi4_js APPEARANCE_DARK_cwcpi4_js cwcpi4 p l w16 h16 bgsz16'><!--icon--></div>
							<div class='h16 lh16 p l ml10 f14'>
								".$languagesArticle[$selectedLanguage]['Share']."
							</div>
						</div>
					<!--END-->
				</div>
				<!--START : Leave a comment on article-->
					<div class='ccw p l mt20 pat none w100 LeaveAcommentID".$article['id'].$IDWWRA."'>
						<!--START-->
							<div class='p l w100 f18 mb20'>
								<!--START : COUNT-->
									<div class='p l countofcommentsID".$article['id'].$IDWWRA."'>".$countOfcomments[0]."</div>
								<!--END-->
								<!--START : Title-->
									<div class='p l ml10'>
										".$languagesArticle[$selectedLanguage]['Comments']."
									</div>
								<!--END-->
							</div>
						<!--END-->
						<!--START : Wrapp ajax.response commentaryes article-->
							<div class='pfacjs innerCommentsAndReplyesID".$article['id'].$IDWWRA."'></div>
						<!--END-->
						";
						if($countOfcomments[0] > 5){
							echo "					
							<!--START : Button (View more comments)-->
								<div class='w100 p l f14 pab countOfCommentsvcID".$article['id'].$IDWWRA."' onclick='vcmcsdfc(".$article['id'].")'>
									<div class='smrc p l pal10 par10 smrccom'>
										Показать <span class='vcmcsdfcspancountID".$article['id'].$IDWWRA."'>",$countOfcomments[0]-5,"</span> больше комментарии →
									</div>
								</div>
							<!--END-->
							";
						}
						echo"
						<!--START : Textarea leave comment-->
							<div class='APPEARANCE_articleLTextareaLeaveComment_js APPEARANCE_DARK_articleLTextareaLeaveComment_js p l cmc1js w100 pa10 br12'>
								<!--START-->
									<div class='w100 f18 mb20'>
										".$languagesArticle[$selectedLanguage]['LeaveAcomment']."
									</div>
								<!--END-->
								<!--START-->
									<div class='txtlcmt p l w100'>
										<!--START : Textarea-->
			                                <input type='text' name='leaveAcommentary' class='c_lacfajs wwctit2Input w100 br50 sh pal commentID".$article['id'].$IDWWRA."' placeholder='".$languagesArticle[$selectedLanguage]['WriteAnything']."...' onclick='removeErrorInput(".$article['id'].$IDWWRA.")'>
										<!--END-->
			                            <!--START : Button-->
			                            	<div class='wwctit3 ab dg jcc alc'><div class='wwctit4 br50 c' onclick='c_lacfac(".$article['id'].$IDWWRA.")'><!--Button--></div></div>
			                            <!--END-->
									</div>
								<!--END-->
							</div>
						<!--END-->
					</div>
				<!--END-->
				</div>
			</div>
		</div>
	<!--END-->
	<div class='article__decor_line__css w100 p l h1 bgws'>
		<div class='adlcss'></div>
	</div>
	";	
?>