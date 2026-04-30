<?php
    #Get email address for recover access
        $recover_access_email = $_POST['recover_access_email'];
    #Check if email is NOT written
        if($recover_access_email == ""){
            #ERROR NR.1
        	    #1 : Email is not written
        	        echo "1";
                    exit();
        }
    #If email is written
        elseif($recover_access_email != ""){
            #Check if email is written correctly
                if(filter_var($recover_access_email, FILTER_VALIDATE_EMAIL)){
                    #Email is written correctly
                    /*Check email if is written in bd->*/ cieirib($recover_access_email);
                } else {
                    #ERROR NR.2
            	        #Email is NOT written correctly
            	           echo "2";
                           exit();
                }
        }
    #Check if email is registered in bd
        function cieirib($recover_access_email){
            #Connect
                require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
                
                if(!$connect){
                    #Failed connection to bd
                        die("Database connection failed: " . mysqli_connect_error());
                }
            #Escape user input to prevent SQL injection
                $recover_access_email = mysqli_real_escape_string($connect, $recover_access_email);
            #Create SQL query to check if email is registered
                $query = mysqli_query($connect, "
                    SELECT * 
                    FROM users 
                    WHERE email = '$recover_access_email'
                ");
                $result = mysqli_fetch_assoc($query);

                if($result){
                    $nickname = $result['nickname'];
                    #Email is registered. Then send a letter for recover access to specified email
                    /*Run function to send a letter*/ salfratse($recover_access_email, $nickname);
                } else {
                    #ERROR NR.3
            	        #Email is NOT registered
            	            echo "3";
                            exit();
                }
        }
    #Send a letter for recover access to specified email
        function salfratse($recover_access_email, $nickname){
            #Connect
                require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
            #START : Generate HASH and writte them in DB
                #Соединяем значения для создания строки данных
                    $data       = date("YmdHis") . $recover_access_email . $nickname . date("His");
                #Создание MD5-хэша
                    $hashedData = md5($data);
                #START : Save $hashedData in table : recover
                    #Query
                        $query_save_hash = mysqli_query($connect, "
                            INSERT INTO recover(hash, email, nickname, status) VALUES ('$hashedData', '$recover_access_email', '$nickname', 0)
                        ");
                    #Success
                        if($query_save_hash){
                            #SEND : Mail
                                $markup  = "
                                    <html>
                                    <head>
                                        <style>
                                            .melewr{
                                                width          : 100%;
                                                display        : grid;
                                                justify-content: center;
                                                padding-bottom : 25px;
                                                font-family    : Arial;
                                            }
                                            .melewr_box{
                                                position      : relative;
                                                max-width     : 600px;
                                                background    : white;
                                                padding-left  : 20px;
                                                padding-right : 20px;
                                                padding-bottom: 20px;
                                            }
                                        </style>
                                    </head>
                                    <body>
                                        <div class='melewr'>
                                            <div class='melewr_box'>
                                                <p>Привет ".$nickname.",</p>
                                                <p>Я получили запрос на сброс твоего пароля.</p>
                                                <p>Если не ты делал запрос, просто пошли нахуй это сообщение. Если ты то ты можешь сбросить свой пароль.</p>
                                                <p>Чтобы сбросить пароль, щелкни веб-адрес ниже или скопируй и вставь его в адресную строку браузера.:</p>
                                                <a href='https://www.наш-формат.ru/newpassword.php?".$hashedData."' target='_blank'>https://www.наш-формат.ru/newpassword.php?".$hashedData."</a>
                                                <p>Пожалуйста, не отвечай на это письмо. Просто не надо, если отправишь то сообщение не будет получено. Если у тебя есть вопросы, свяжись со мной по адресу help@наш-формат.ru</p>
                                            </div>
                                        </div>
                                    </body>
                                    </html>
                                ";
                                $to      = $recover_access_email;
                                $subject = "Чел забыл пароль";
                                $message = $markup;
                                $headers = "From: no-reply@наш-формат.ru" . "\r\n" .
                                           "X-Mailer: PHP/" . phpversion() . "\r\n" .
                                           "Content-Type: text/html; charset=UTF-8";

                                if(mail($to, $subject, $message, $headers)){
                                    #SUCCESS NR.4
                                        #Email sent successfully
                                           echo "4";
                                           exit();
                                } else {
                                    #ERROR NR.5
                                        #Failed to send email
                                           echo "5";
                                           exit();
                                }
                            #END
                        } 
                    #Error
                        else {
                            echo "Ошибка при добавлении данных: " . mysqli_error($connect);
                            exit();
                        }
                #END
            #END
        }
?>