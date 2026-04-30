<?php
	#START : Проверка наличия активной сессии
        if(session_status() == PHP_SESSION_NONE){
            #Если сессия не запущена, запустить новую сессию
            	session_start();
        }
    #END
	#Admin
		if($_SESSION["admin"]["type"] == "admin"){
			require_once "src/path/dt/ss/signin/signin_admin.php";
		} 
	#Sign In for all users
		elseif(isset($_SESSION["admin"]) && $_SESSION["admin"]["type"] != "admin") {
			require_once "src/path/dt/ss/signin/signin_user.php";
		}
?>