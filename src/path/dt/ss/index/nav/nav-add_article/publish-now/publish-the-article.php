<?php
#START : Проверка наличия активной сессии
require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
#END
#Redirect if not authorized
if (!$_SESSION["user"]) {
    header("Location: index.php");
}
#AJAX
$article_title = $_POST["article_title"];
$article_text = $_POST["article_text"];
$article_thumbnail_des = $_POST["article_thumbnail_des"];
$article_category = $_POST["article_category"];
$article_notifications = $_POST["article_notifications"];
#Check if $article_title is empty
if ($article_title == "") {
    #ERROR NR.1
    echo "1";
}
#Check if $article_title is NOT empty
else if ($article_title != "") {
    #Check if $article_text is empty
    if ($article_text == "") {
        #ERROR NR.2
        echo "2";
    }
    #Check if $article_text is NOT empty
    else if ($article_text != "") {
        #Check if $article_thumbnail_des is empty
        if ($article_thumbnail_des == "") {
            #ERROR NR.2.2
            echo "2.2";
        }
        #Check if $article_thumbnail_des is NOT empty
        else if ($article_thumbnail_des != "") {
            #Check if $article_category is empty
            if ($article_category == "") {
                #ERROR NR.3
                echo "3";
            }
            #Check if $article_category is NOT empty
            else if ($article_category != "") {
                #Check if $article_notifications is empty
                if ($article_notifications == "") {
                    #ERROR NR.4
                    echo "4";
                }
                #Check if $article_notifications is NOT empty
                if ($article_notifications != "") {
                    /*SEND TO BD->*/ saveData($article_title, $article_text, $article_thumbnail_des, $article_category, $article_notifications);
                }
            }
        }
    }
}
#1/3 : SAVE DATA IN TABLE articles.sql
function saveData($article_title, $article_text, $article_thumbnail_des, $article_category, $article_notifications)
{
    #START : Read time
    #Удаление HTML-тегов и их содержимого
    $clean_text = strip_tags($article_text);
    #Подсчет количества слов с учетом русского алфавита
    $word_count = str_word_count($clean_text, 0, 'абвгдеёжзийклмнопрстуфхцчшщъыьэюяabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789ءآأؤإئابةتثجحخدذرزسشصضطظعغفقكلمنهوىي');
    #Вывод количества слов для проверки
    #echo "Количество слов: " . $word_count . "<br>";
    #Определение средней скорости чтения (слов в минуту)
    $average_reading_speed = 200;
    #Подсчет времени, необходимого для чтения текста (в минутах)
    $reading_time_minutes = $word_count / $average_reading_speed;
    #Округление времени до ближайшего целого числа вверх (чтобы учесть даже частичные минуты)
    $reading_time_minutes = ceil($reading_time_minutes);
    #END
    #INCLUDE
    #PHP data
    $save_article_session_nickname = $_SESSION["user"]["nickname"];
    $save_date = date('Y-m-d h:i:s');
    #INCLUDE
    require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
    #CODE GENERATE
    $code_data = substr($article_title, 0, 20) . substr($article_text, 0, 20) . $save_article_session_nickname . $save_date;
    $code = password_hash($code_data, PASSWORD_DEFAULT);
    #Prepare the statement
    $query = "INSERT INTO articles (code, nickname, category, title, textarea, reading_time, thumbnail_description, allow_notifications, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    if ($stmt = mysqli_prepare($connect, $query)) {
        $status = 0;
        #Bind the parameters
        require "cutParOfText.php";
        $article_text30 = truncateHtml($article_text, 100);
        mysqli_stmt_bind_param($stmt, "ssssssssi", $code, $save_article_session_nickname, $article_category, $article_title, $article_text30, $reading_time_minutes, $article_thumbnail_des, $article_notifications, $status);
        #Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            #SUCCESS
            redirectUser($code, $article_text, $save_article_session_nickname);
        } else {
            # Error
            echo "5" . mysqli_error($connect);
        }
        #Close the statement
        mysqli_stmt_close($stmt);
    }
}
#REDIRECT
    function redirectUser($code, $article_text, $save_article_session_nickname){
        #IF_IS_PUBLISHED_THEN_REDIRECT_TO_ARTICLE.PHP
        #Get ID of new added article
        #INCLUDE
            require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
        #QUERY
            $query = mysqli_query($connect, "SELECT id FROM articles WHERE code='$code'");
            $obtainedID = $query->fetch_row();
        #ELSE
        #Check if query was successful
            if($query){
                #SUCCESS
                    $id_of_article_for_url = array(
                        "status" => "9",
                        "id" => $obtainedID[0]
                    );
                #Extract id
                    $id_of_article = $id_of_article_for_url['id'];
                #START : save 100 percent text
                    #2/3 : SAVE $article_text CUTTED PART in table : articles. id_of_article nickname textarea
                        #Prepare the statement
                            $query = "
                               UPDATE articles SET textarea100percent = ? WHERE id = '$id_of_article'
                            ";
                            if($stmt = mysqli_prepare($connect, $query)){
                                #Bind the parameters
                                    mysqli_stmt_bind_param($stmt, "s", $article_text);
                                #Execute the statement
                                    if(mysqli_stmt_execute($stmt)){
                                        #SUCCESS : Echo id of article for js redirect to new uploaded article
                                            echo json_encode($id_of_article_for_url);
                                    } else {
                                        #Error
                                            echo "7.1" . mysqli_error($connect);
                                    }
                                #Close the statement
                                    mysqli_stmt_close($stmt);
                            }
                    #3/3 : REDIRECT
                #END
            }
        #Query was unsuccessful
            else {
                #ERROR NR.8
                    echo "8";
            }
    }
?>