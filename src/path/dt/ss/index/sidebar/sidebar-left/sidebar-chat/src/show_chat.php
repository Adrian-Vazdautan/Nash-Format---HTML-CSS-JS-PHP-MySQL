<?php
# START: AJAX
$number_of_request = $_POST['number_of_request'];
# END

# START: Проверка наличия активной сессии
require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
# END

$userWhichSignIn = null;
if (isset($_SESSION['user']) && is_array($_SESSION['user']) && isset($_SESSION['user']['nickname'])) {
    $userWhichSignIn = $_SESSION['user']['nickname'];
}

# Connect
require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
# Time
require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/ss/index/sidebar/sidebar-left/sidebar-home/sidebar-home-articles/time.php");

# Initialize $last_chat_message_id
$last_chat_message_id = isset($_SESSION["chat_message_id"]) ? $_SESSION["chat_message_id"] : 0;

# START
if ($number_of_request == "1") {
    # Query
    $query_show_from_bd = mysqli_query($connect, "SELECT * FROM chat ORDER BY id DESC LIMIT 20");
    # Запрос выполнен успешно
    if ($query_show_from_bd) {
        $messages = array(); # Создаем временный массив для хранения сообщений
        while ($message = mysqli_fetch_assoc($query_show_from_bd)) {
            # RIGHT: Author of message
            if ($message['nickname'] == $userWhichSignIn) {
                # START
                # Get avatar, background, and nickname using ID
                $query = mysqli_query($connect, "
                    SELECT id, avatar, background, nickname
                    FROM users
                    WHERE nickname = '" . $message['nickname'] . "'
                ");
                $profile_user = mysqli_fetch_assoc($query);
                $isp_Avatar = isset($profile_user['avatar']) ? $profile_user['avatar'] : '';

                # Check if image is NOT stored in BD
                if ($isp_Avatar == "") {
                    $Show_Avatar = "<div class='p l mr10 dg alc jcc br50 cw' style='background: blue;width: 44px;height: 44px;position: absolute;right: -74px;top: 0px;'>" . substr($message['nickname'], 0, 1) . "</div>";
                }
                # Check if image is stored in BD
                else if ($isp_Avatar != "") {
                    # START: Obtain image_name.png from bd
                    $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='" . $message['nickname'] . "'");
                    $query_image_name = mysqli_fetch_row($query_image_name);
                    # Check if query was successful
                    if ($query_image_name && isset($query_image_name[0])) {
                        $Show_Avatar = "<div class='p l bgsz24 br50 h24 w24 mr10' style='background-image: url(src/du/avatar/" . $query_image_name[0] . "); width: 44px;height: 44px;position: absolute;right: -74px;top: 0px;background-repeat: no-repeat;background-size: contain;'></div>";
                    } else {
                        # В случае ошибки
                        $Show_Avatar = "";
                    }
                    # END
                }
                # END
                $messages[] = "
                    <!--START: RIGHT-->
                    <div class='wwctML w100 p l mb10'>
                        <div class='wwctMR1_nr_2 p r br12'>
                            <div class='w100 p l'><div class='p r'>" . $Show_Avatar . "<div class='chat_right_nickname_css p l ml10 tdu c' onclick='wshowUserProfile(" . $profile_user['id'] . ",`" . $message['nickname'] . "`)'>" . $message['nickname'] . "</div></div></div><div class='w100 chat_right_message_css'>" . $message['message'] . "</div><div class='chat_right_date_css p l'>" . date('H:i', strtotime($message['dateofpublication'])) . "</div>
                        </div>
                    </div>
                    <!--END-->
                ";
            }
            # LEFT: Unknown author of message
            else if ($message['nickname'] != $userWhichSignIn) {
                # START
                # Get avatar, background, and nickname using ID
                $query = mysqli_query($connect, "
                    SELECT id, avatar, background, nickname
                    FROM users
                    WHERE nickname = '" . $message['nickname'] . "'
                ");
                $profile_user = mysqli_fetch_assoc($query);
                $isp_Avatar = isset($profile_user['avatar']) ? $profile_user['avatar'] : '';

                # Check if image is NOT stored in BD
                if ($isp_Avatar == "") {
                    $Show_Avatar = "<div class='p l mr10 dg alc jcc br50 cw' style='background: blue;width: 44px;height: 44px;position: absolute;left: -54px;top: 0px;'>" . substr($message['nickname'], 0, 1) . "</div>";
                }
                # Check if image is stored in BD
                else if ($isp_Avatar != "") {
                    # START: Obtain image_name.png from bd
                    $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='" . $message['nickname'] . "'");
                    $query_image_name = mysqli_fetch_row($query_image_name);
                    # Check if query was successful
                    if ($query_image_name && isset($query_image_name[0])) {
                        $Show_Avatar = "<div class='p l bgsz24 br50 h24 w24 mr10' style='background-image: url(src/du/avatar/" . $query_image_name[0] . "); width: 44px;height: 44px;position: absolute;left: -54px;top: 0px;background-repeat: no-repeat;background-size: contain;'></div>";
                    } else {
                        # В случае ошибки
                        $Show_Avatar = "";
                    }
                    # END
                }
                # END
                $messages[] = "
                    <!--START: LEFT-->
                    <div class='wwctML w100 p l mb10'>
                        <div class='wwctML1 p l br12'>
                            <div class='w100'>" . $Show_Avatar . "<div class='chat_left_nickname_css p l mr10 tdu c' onclick='wshowUserProfile(" . $profile_user['id'] . ",`" . $message['nickname'] . "`)'>" . $message['nickname'] . "</div><div class='chat_left_date_css p l'>" . date('H:i', strtotime($message['dateofpublication'])) . "</div></div><div class='w100 chat_left_message_css'>" . $message['message'] . "</div>
                        </div>
                    </div>
                    <!--END-->
                ";
            }
        }
        # Выводим сообщения в обратном порядке
        foreach (array_reverse($messages) as $message) {
            echo $message;
        }
        # START: Count of messages
        # Query
        $query_count_of_messages = mysqli_query($connect, "SELECT id FROM chat ORDER BY id DESC LIMIT 1");
        # Запрос выполнен успешно
        if ($query_count_of_messages) {
            $query_count_of_messages = mysqli_fetch_row($query_count_of_messages);
            # START: NEW SESSION
            $_SESSION["chat_message_id"] = isset($query_count_of_messages[0]) ? $query_count_of_messages[0] : 0;
            # END
        }
        # В случае ошибки
        else {
            echo "Ошибка при добавлении данных: " . mysqli_error($connect);
        }
        # END
    }
    # В случае ошибки
    else {
        echo "Ошибка при добавлении данных: " . mysqli_error($connect);
    }
} elseif ($number_of_request > "1") {
    # Query
    $query_show_from_bd = mysqli_query($connect, "SELECT * FROM chat WHERE id>'$last_chat_message_id' AND nickname!='$userWhichSignIn'");
    # Запрос выполнен успешно
    if ($query_show_from_bd) {
        $messages = array(); # Создаем временный массив для хранения сообщений
        while ($message = mysqli_fetch_assoc($query_show_from_bd)) {
            # RIGHT: Author of message
            if ($message['nickname'] == $userWhichSignIn) {
                # START
                # Get avatar, background, and nickname using ID
                $query = mysqli_query($connect, "
                    SELECT id, avatar, background, nickname
                    FROM users
                    WHERE nickname = '" . $message['nickname'] . "'
                ");
                $profile_user = mysqli_fetch_assoc($query);
                $isp_Avatar = isset($profile_user['avatar']) ? $profile_user['avatar'] : '';

                # Check if image is NOT stored in BD
                if ($isp_Avatar == "") {
                    $Show_Avatar = "<div class='p l mr10 dg alc jcc br50 cw' style='background: blue;width: 44px;height: 44px;position: absolute;right: -74px;top: 0px;'>" . substr($message['nickname'], 0, 1) . "</div>";
                }
                # Check if image is stored in BD
                else if ($isp_Avatar != "") {
                    # START: Obtain image_name.png from bd
                    $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='" . $message['nickname'] . "'");
                    $query_image_name = mysqli_fetch_row($query_image_name);
                    # Check if query was successful
                    if ($query_image_name && isset($query_image_name[0])) {
                        $Show_Avatar = "<div class='p l bgsz24 br50 h24 w24 mr10' style='background-image: url(src/du/avatar/" . $query_image_name[0] . "); width: 44px;height: 44px;position: absolute;right: -74px;top: 0px;background-repeat: no-repeat;background-size: contain;'></div>";
                    } else {
                        # В случае ошибки
                        $Show_Avatar = "";
                    }
                    # END
                }
                # END
                $messages[] = "
                    <!--START: RIGHT-->
                    <div class='wwctML w100 p l mb10'>
                        <div class='wwctMR1_nr_2 p r br12'>
                            <div class='w100 p l'><div class='p r'>" . $Show_Avatar . "<div class='chat_right_nickname_css p l ml10 tdu c' onclick='wshowUserProfile(" . $profile_user['id'] . ",`" . $message['nickname'] . "`)'>" . $message['nickname'] . "</div></div></div><div class='w100 chat_right_message_css'>" . $message['message'] . "</div><div class='chat_right_date_css p l'>" . date('H:i', strtotime($message['dateofpublication'])) . "</div>
                        </div>
                    </div>
                    <!--END-->
                ";
            }
            # LEFT: Unknown author of message
            else if ($message['nickname'] != $userWhichSignIn) {
                # START
                # Get avatar, background, and nickname using ID
                $query = mysqli_query($connect, "
                    SELECT id, avatar, background, nickname
                    FROM users
                    WHERE nickname = '" . $message['nickname'] . "'
                ");
                $profile_user = mysqli_fetch_assoc($query);
                $isp_Avatar = isset($profile_user['avatar']) ? $profile_user['avatar'] : '';

                # Check if image is NOT stored in BD
                if ($isp_Avatar == "") {
                    $Show_Avatar = "<div class='p l mr10 dg alc jcc br50 cw' style='background: blue;width: 44px;height: 44px;position: absolute;left: -54px;top: 0px;'>" . substr($message['nickname'], 0, 1) . "</div>";
                }
                # Check if image is stored in BD
                else if ($isp_Avatar != "") {
                    # START: Obtain image_name.png from bd
                    $query_image_name = mysqli_query($connect, "SELECT avatar FROM users WHERE nickname='" . $message['nickname'] . "'");
                    $query_image_name = mysqli_fetch_row($query_image_name);
                    # Check if query was successful
                    if ($query_image_name && isset($query_image_name[0])) {
                        $Show_Avatar = "<div class='p l bgsz24 br50 h24 w24 mr10' style='background-image: url(src/du/avatar/" . $query_image_name[0] . "); width: 44px;height: 44px;position: absolute;left: -54px;top: 0px;background-repeat: no-repeat;background-size: contain;'></div>";
                    } else {
                        # В случае ошибки
                        $Show_Avatar = "";
                    }
                    # END
                }
                # END
                $messages[] = "
                    <!--START: LEFT-->
                    <div class='wwctML w100 p l mb10'>
                        <div class='wwctML1 p l br12'>
                            <div class='w100'>" . $Show_Avatar . "<div class='chat_left_nickname_css p l mr10 tdu c' onclick='wshowUserProfile(" . $profile_user['id'] . ",`" . $message['nickname'] . "`)'>" . $message['nickname'] . "</div><div class='chat_left_date_css p l'>" . date('H:i', strtotime($message['dateofpublication'])) . "</div></div><div class='w100 chat_left_message_css'>" . $message['message'] . "</div>
                        </div>
                    </div>
                    <!--END-->
                ";
            }
        }
        # Выводим сообщения в обратном порядке
        foreach (array_reverse($messages) as $message) {
            echo $message;
        }
        # START: Count of messages
        # Query
        $query_count_of_messages = mysqli_query($connect, "SELECT id FROM chat ORDER BY id DESC LIMIT 1");
        # Запрос выполнен успешно
        if ($query_count_of_messages) {
            $query_count_of_messages = mysqli_fetch_row($query_count_of_messages);
            # START: NEW SESSION
            $_SESSION["chat_message_id"] = isset($query_count_of_messages[0]) ? $query_count_of_messages[0] : 0;
            # END
        }
        # В случае ошибки
        else {
            echo "Ошибка при добавлении данных: " . mysqli_error($connect);
        }
        # END
    }
    # В случае ошибки
    else {
        echo "Ошибка при добавлении данных: " . mysqli_error($connect);
    }
}
?>
