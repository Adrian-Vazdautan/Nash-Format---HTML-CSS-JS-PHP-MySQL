<?php require_once "src/languagesRWRN.php";?>

<!--START : Recommended-->
<div class="APPEARANCE_read_now_js APPEARANCE_DARK_read_now_js rwrn l bgw pa br12 mt25 sh">
    <!--START : Title-->
    <div class="rwrnt l w100 fw pab f18">
        <div class="p l">
            <div class="APPEARANCE_read_now_TITLE_js APPEARANCE_DARK_read_now_js p l">
                <?php echo $languagesRWRN[$selectedLanguage]['Recommended'];?>
            </div>
            <div class="ab w100 cWCDjs"><!--icon--></div>
        </div>
    </div>
    <!--END-->
    <!--START : Recommended_articles-->
    <div class="l w100">
        <div class="rwrnaw w100 p l">
            <?php
                #Required
                require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
                require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/ss/index/sidebar/sidebar-left/sidebar-home/sidebar-home-articles/time.php");
                
                #Query
                $query_get_recommended_list = mysqli_query($connect, "
                    SELECT id, id_of_article FROM recommended ORDER BY id DESC LIMIT 5
                ");
                
                #Check if there are results
                if (mysqli_num_rows($query_get_recommended_list) > 0) {
                    #Increment
                    $increment = 0;

                    #Echo list of articles from bd: nicknames of authors
                    while ($query_GRL = mysqli_fetch_assoc($query_get_recommended_list)) {
                        $query_TRL = $query_GRL['id_of_article'];

                        #Still one query
                        $query_get_recommended_articles_details = mysqli_query($connect, "
                            SELECT * FROM articles WHERE status='0' AND id='$query_TRL'
                        ");

                        #Echo details of articles from bd: id, nickname, title, date
                        while ($query_DOAF = mysqli_fetch_assoc($query_get_recommended_articles_details)) {
                            $increment++;
                            #START : Obtain user id by nickname
                            $query_DOAF_nickname = $query_DOAF['nickname'];
                            $query_UIB = mysqli_query($connect, "SELECT id FROM users WHERE nickname='$query_DOAF_nickname'");
                            $query_UIB = $query_UIB->fetch_row();
                            $query_UIB = $query_UIB[0];#id of user who published
                            #END
                            echo "
                                <!--START : Row-->
                                <div class='w100 p l pat10 pab f14 fw pat'>
                                    <!--START : TITLE-->
                                    <div class='tdu c' onclick='show_article_in_extended_mode(".$query_DOAF['id'].")'>
                                        ".$query_DOAF['title']."
                                    </div>
                                    <!--END-->
                                    <!--START : ROW-->
                                    <div class='w100 mt5 p l'>
                                        <!--START : USERNAME-->
                                        <div class='cs f10 p l rwrnjs'><div class='APPEARANCE_author_js APPEARANCE_DARK_author_js p l'>".$languagesRWRN[$selectedLanguage]['Author'].": &nbsp</div><div class='APPEARANCE_read_now_NICKNAME_js APPEARANCE_DARK_read_now_NICKNAME_js p l cb c tdu' onclick='wshowUserProfile(".$query_UIB.",`".$query_DOAF['nickname']."`)'>
                                            ".$query_DOAF['nickname'].",
                                        </div></div>
                                        <!--END-->
                                        <!--START : DATE-->
                                        <div class='APPEARANCE_read_now_date_js APPEARANCE_DARK_read_now_date_js cs f10 p l'>&nbsp "; echo getTimeAgo($query_DOAF['dateofpublication']); echo ".</div>
                                        <!--END-->
                                    </div>
                                    <!--END-->
                                </div>"; 
                            if ($increment != 5) {
                                echo "
                                    <!--START : DECOR--><div class='w100 p l h1 bgws'></div><!--END-->
                                    <!--END-->
                                ";
                            }
                        }
                    }
                } else {
                    #No articles found
                        echo "<div class='w100 p l pat10 pab f14 fw pat f18'>No result found</div>";
                }
            ?>
        </div>
    </div>
    <!--END-->
</div>
<!--END-->
