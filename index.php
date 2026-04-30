<?php
	#Redirect to HTTPS if is HTTP
		#if($_SERVER['HTTPS'] != 'on'){$redirect_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];header('Location: ' . $redirect_url);}
			#START : DESKTOP DEVICE
				require_once "src/path/dt/ss/index/index.php";
			#END
?>