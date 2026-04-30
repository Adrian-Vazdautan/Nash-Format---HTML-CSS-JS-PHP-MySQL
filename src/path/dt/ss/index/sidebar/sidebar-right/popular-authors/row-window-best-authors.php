<?php require_once "src/languagesRWBA.php"; ?>

<div class="APPEARANCE_best_authors_js APPEARANCE_DARK_best_authors_js l mt25 bgw pal par br12 sh w100 pab">
    <div class="rwban2 l w100 fw f18 mt20 pab">
        <!--START : WIDGET-->
        <div class="p l">
            <!--START : TITLE WIDGET-->
            <div class="APPEARANCE_title_best_authors_js APPEARANCE_DARK_title_best_authors_js p l">
                <?php echo $languagesRWBA[$selectedLanguage]['Top10popularAuthorsForLastYear']; ?>
            </div>
            <!--END-->
            <div class="ab w100 cWCDjs"><!--icon--></div>
        </div>
        <!--END-->
    </div>
    <div class="rwbaln1 l w100 pab">
        <!--START : -LIST-OF-AUTHORS-->
        <?php
            #Top 10
            $top10 = 1;
            #Required
            require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
            #Query
            $query_get_nickname_AND_points = mysqli_query($connect, "
                SELECT u.id, a.nickname, 
                       COALESCE(SUM(article_count), 0) + COALESCE(SUM(commentary_count), 0) + COALESCE(SUM(like_count), 0) as total_count,
                       u.studies
                FROM (
                    SELECT nickname, COUNT(*) as article_count
                    FROM articles
                    WHERE dateofpublication >= CURDATE() - INTERVAL 1 YEAR
                    GROUP BY nickname
                ) a
                LEFT JOIN (
                    SELECT nickname, COUNT(*) as commentary_count
                    FROM articles_commentary
                    WHERE dateofpublication >= CURDATE() - INTERVAL 1 YEAR
                    GROUP BY nickname
                ) b ON a.nickname = b.nickname
                LEFT JOIN (
                    SELECT nickname, COUNT(*) as like_count
                    FROM liked
                    WHERE dateofpublication >= CURDATE() - INTERVAL 1 YEAR
                    GROUP BY nickname
                ) c ON a.nickname = c.nickname
                LEFT JOIN (
                    SELECT nickname, COUNT(*) as like_for_commentary_count
                    FROM like_for_commentary_from_article
                    WHERE dateofpublication >= CURDATE() - INTERVAL 1 YEAR
                    GROUP BY nickname
                ) d ON a.nickname = d.nickname
                LEFT JOIN users u ON a.nickname = u.nickname
                GROUP BY u.id, a.nickname, u.studies
                ORDER BY total_count ASC
                LIMIT 10;
            ");
            #Fetch results into an array
            $results = [];
            while ($query_GNP = mysqli_fetch_assoc($query_get_nickname_AND_points)) {
                $results[] = $query_GNP;
            }
            #Check if results are empty
            if (empty($results)) {
                echo "<div class='no-result pat f18'>No result found</div>";
            } else {
                #Reverse the array to display in ascending order
                $results = array_reverse($results);
                #Echo from bd
                foreach ($results as $query_GNP) {
                    #RANK
                    $rank = $top10;
                    #Top 10 style
                    if($top10 < 10){
                        $rank = "0".$top10;
                    }
                    if($top10 == 3){
                        $rank = "<p class='red'>0".$top10."</p>";
                    }
                    if($top10 == 2){
                        $rank = "<p class='orange'>0".$top10."</p>";
                    }
                    if($top10 == 1){
                        $rank = "<p class='green'>0".$top10."</p>";
                    }
                    #Output
                    echo "
                    <!--START-->
                    <div class='h36 l mt20 f14 w100'>
                        <!--START : RANK-->
                        <div class='APPEARANCE_rank_js APPEARANCE_DARK_rank_js p l f14 h36 lh36 cs'>
                            ".$rank."
                        </div>
                        <!--END-->
                        <!--START : IMAGE-->
                        <div class='w36 h36 l ml10'>";
                            #Get avatar, background, and nickname using ID
                            $query = mysqli_query($connect, "
                                SELECT avatar, background, nickname
                                FROM users
                                WHERE nickname = '".$query_GNP['nickname']."'
                            ");
                            
                            if($profile_user = mysqli_fetch_assoc($query)){
                                $isp_Avatar = $profile_user['avatar'];
                            }
                            #Check if image is NOT stored in BD
                            if($isp_Avatar == ""){
                                $Show_Avatar = "<div class='background_blue p l dg alc jcc br50 cw w36 h36'>".substr($query_GNP['nickname'], 0, 1)."</div>";
                            } 
                            #Check if image is stored in BD
                            else if($isp_Avatar != "" && $isp_Avatar != NULL){
                                #START : Obtain image_name.png from bd
                                /*Query->*/ $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='".$query_GNP['nickname']."'");
                                /*Result->*/$query_image_name = $query_image_name->fetch_row();
                                #Check if query was successfull
                                if($query_image_name){
                                    #Запрос выполнен успешно 
                                    $Show_Avatar = "<img loading='lazy' class='l w36 h36 br50' title='Avatar' src='src/du/avatar/". $query_image_name[0] ."' />";
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
                        <div class='h36 l ml10 dg alc'>
                            <div>
                                <!--START : USERNAME-->
                                <div class='c tdu rwbajs' onclick='wshowUserProfile(".$query_GNP['id'].",`".$query_GNP['nickname']."`)'>
                                    ".$query_GNP['nickname']."
                                </div>
                                <!--END-->
                                <!--START : STUDIES-->
                                <div class='APPEARANCE_studies_js APPEARANCE_DARK_studies_js cs f10'>
                                    ".$query_GNP['studies']."
                                </div>
                                <!--END-->
                            </div>
                        </div>
                        <!--START : POINTS-->
                        <div class='cwbarn1 h36 lh36 r' title='Points'>
                            ".$query_GNP['total_count']."
                        </div>
                        <!--END-->
                    </div>
                    <!--END-->
                    ";
                    #Decrement
                    #$top10--;
                    $top10++;
                }
            }
        ?>
        <!--END-LIST-OF-AUTHORS-->
    </div>
</div>
