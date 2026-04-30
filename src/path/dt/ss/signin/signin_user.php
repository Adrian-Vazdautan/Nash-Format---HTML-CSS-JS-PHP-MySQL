<?php
	#START : Проверка наличия активной сессии
        require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
    #END
	if(isset($_SESSION["user"])){
		header("Location: ../auth/auth.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Наш-формат - ВХОД</title>
	<link rel="stylesheet" href="../../src/path/dt/cs/signin/signin.css">
	<script defer src="../../src/path/dt/cs/signin/signin.js"></script>
</head>
<body>
	<!--START : Preloader-->
		<?php require_once "src/path/dt/sy/preloader.php"; ?>
	<!--END-->
	<!--START : Offline-->
		<?php require_once "src/path/dt/sy/offline.php"; ?>
	<!--END-->
	<div class="w100 vh100 dg alc jcc">
		<div class="wSRIS bgw br12 pa">
			<!--START-->
				<div class="cYTA w100 f24">
					Зайти внутрь
				</div>
			<!--END-->
			<!--START-->
				<div class="cYTA mt20 w100 f14 fw">
					Мыло или имя
				</div>
				<input type="email" class="iYE mt10 w100 br4" name="email">
			<!--END-->
			<!--START-->
				<div class="cYTA mt20 w100 f14 fw">
					Пароль
				</div>
				<input type="password" class="inYPjs mt10 w100 br4" name="password">
			<!--END-->
			<!--START-->
				<input type="button" class="ib p w100 br4 f14 mt20 c" onclick="authorizeUser()" value="Зайти">
			<!--END-->
			<!--START-->
				<a href="../../../recovery.php">
					<div class="pfpjs w100 f14 mt20 c u">
						Бл я забыл кое что:(
					</div>
				</a>
				<a href="../../../signup.php">
					<div class="prjs c mt10 f14 w100 u">
						Запишите меня в базу
					</div>
				</a>
			<!--END-->
		</div>
	</div>
</body>
</html>