<?php
	/*
		1. 7 articles
		2. Not visible for mobile
		3. Uniquie articles
	*/
	#Required
		require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
	
	#Query
		$query_get_recommended_list = mysqli_query($connect, "
			SELECT id_of_article
			FROM (
			    SELECT id_of_article, id
			    FROM star
			    ORDER BY id DESC
			) AS subquery
			GROUP BY id_of_article
			ORDER BY MAX(id) DESC
			LIMIT 7;
		");

	if (mysqli_num_rows($query_get_recommended_list) == 0) {
	    for($it = 0; $it <= 6; $it++){
	    	#START : NO RESULT FOUND
	    		echo "
                    <div class='feed_SLIDER_content_js'>
                        <!--START : Title, Text, Avatar, Nickname-->
                            <div class='slider_title_text_avatar_nickname_gradient slider_ttang_no_result_found_js'>
                               NO RESULT FOUND
                        	</div>
                        <!--END-->
                    </div>
	            ";
	    	#END
	    }
	} else {
	    #Echo details of articles from bd: id, nickname, title, date
	    while($query_DOAF = mysqli_fetch_assoc($query_get_recommended_list)){
	        	$id_slider = $query_DOAF['id_of_article'];
	        #Query Nr:2
		        $query_get_recommended_list_2 = mysqli_query($connect, "
		            SELECT id, nickname, title, textarea, thumbnail_image 
		            FROM articles
		            WHERE id='$id_slider'
		        ");
	        
	        if (mysqli_num_rows($query_get_recommended_list_2) == 0) {
	            echo "No result found for article id: $id_slider";
	        } else {
	            while($query_DOAF = mysqli_fetch_assoc($query_get_recommended_list_2)){
	                #START : Title. Сокрашение названии стати + добавление точек
		                #Обрезание заголовка до 18 символов и добавление трех точек
			                $trimmed_title = mb_substr($query_DOAF['title'], 0, 18);
			                if(mb_strlen($query_DOAF['title']) > 18){
			                    $trimmed_title .= '...';
			                }
	                #END
	                #START : Textarea. Сокращение + 3 точки
		                #Удаление HTML-тегов из текста
		                	$text_without_html_tags = strip_tags($query_DOAF['textarea']);
		                #Обрезание текста до 28 символов с сохранением слов
			                $trimmed_text = mb_substr($text_without_html_tags, 0, 28);
			                $trimmed_text = rtrim($trimmed_text, "!,.-");
			                $last_space = mb_strrpos($trimmed_text, ' ');
			                $trimmed_text = mb_substr($trimmed_text, 0, $last_space) . '...';
	                #END
	                echo "
	                    <!--START : Window | max 7-->
		                    <a href='https://think.ceo/article.php?id=".$id_slider."'>
		                        <div class='feed_SLIDER_content_js'>
		                            <!--START : Image-->
			                            <div class='slider_div_image'>
			                                <img loading='lazy' class='slider_image' src='src/du/thumbnail/".$query_DOAF['thumbnail_image']."' title='Image'>
			                            </div>
		                            <!--END-->
		                            <!--START : Title, Text, Avatar, Nickname-->
			                            <div class='slider_title_text_avatar_nickname_gradient'>
			                                <!--START : Title-->
				                                <div class='slider_w_title_js'>
				                                    ".$trimmed_title."
				                                </div>
			                                <!--END-->
			                                <!--START : Text-->
				                                <div class='slider_w_text_js'>
				                                    ".$trimmed_text."
				                                </div>
			                                <!--END-->
			                                <!--START : Avatar + Nickname-->
				                                <div class='slider_w_avatar_nickname'>
				                                    <!--START : Avatar-->
					                                    <div class='slider_w_avatar_js'>";
						                                    #Get avatar, background, and nickname using ID
							                                    $query = mysqli_query($connect, "
							                                        SELECT avatar, background, nickname
							                                        FROM users
							                                        WHERE nickname = '".$query_DOAF['nickname']."'
							                                    ");
							                                    
							                                    if($profile_user = mysqli_fetch_assoc($query)){
							                                        $isp_Avatar = $profile_user['avatar'];
							                                    }
						                                    #Check if image is NOT stored in BD
							                                    if($isp_Avatar == ""){
							                                        $Show_Avatar = "<div class='image_avatar_css p l dg alc jcc br50 cw'>".substr($query_DOAF['nickname'], 0, 1)."</div>";
							                                    } 
						                                    #Check if image is stored in BD
							                                    else if($isp_Avatar != "" && $isp_Avatar != NULL){
							                                        #START : Obtain image_name.png from bd
								                                        $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='".$query_DOAF['nickname']."'");
								                                        $query_image_name = $query_image_name->fetch_row();
							                                        #Check if query was successfull
								                                        if($query_image_name){
								                                            #Запрос выполнен успешно 
								                                            $Show_Avatar = "<img loading='lazy' class='wUI_slider' src='src/du/avatar/". $query_image_name[0] ."'/>";
								                                        }
							                                    }
						                                    #Show avatar
						                                    	echo $Show_Avatar;
						                                    echo "
					                                    </div>
				                                    <!--END-->
				                                    <!--START : Nickname-->
					                                    <div class='slider_w_nickname_js'>
					                                        ".$query_DOAF['nickname']."
					                                    </div>
				                                    <!--END-->
			                               		</div>
		                                	<!--END-->
		                            	</div>
		                            <!--END-->
		                        </div>
		                    </a>
	                    <!--END-->
	                ";
	            }
	        }
	    }
	}
?>
