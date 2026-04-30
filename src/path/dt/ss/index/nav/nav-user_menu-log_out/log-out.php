<?php 
    #START : Проверка наличия активной сессии
        require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
    #AJAX
        $logOut = $_POST["logOut"];
    #Check
        if($logOut == "1"){
            #START : Обновление токена в базе данных на NULL
                require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
                if(!$connect){
                    // Сообщение об ошибке подключения к базе данных
                    die("Database connection failed: " . mysqli_connect_error());
                }
                $userId = $_SESSION["user"]["id"];
                $query = "UPDATE users SET token = NULL WHERE id = '$userId'";
                mysqli_query($connect, $query);
            #END
            #Close session
                unset($_SESSION["user"]);
            #Удаление куки авторизации
                setcookie('auth_token', '', time() - 3600, '/');
            #Редирект
                header("Location: ../../../../../../../index.php");
        }
?>