<?php
    #START : Проверка наличия активной сессии
        if(session_status() == PHP_SESSION_NONE){
            //Если сессия не запущена, запустить новую сессию
                session_start();
        }
    #END
    #START : Session : false
        if(!isset($_SESSION) || empty($_SESSION)){
            require "src/path/dt/ss/index/index.php";
        } 
    #END
    #START : Session : true
        else {
            header('Cache-Control: public, max-age=3600');
            require "src/path/dt/ss/feed/feed.php";
        }
    #END
?>