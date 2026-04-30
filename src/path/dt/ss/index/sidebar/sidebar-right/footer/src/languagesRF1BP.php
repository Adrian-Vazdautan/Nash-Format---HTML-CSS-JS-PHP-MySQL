<?php
	if(isset($_COOKIE['choosed_language'])){
    	$selectedLanguage = $_COOKIE['choosed_language'];
	} else{
		$selectedLanguage = 'English';
	}

	$languagesRF1BP = [
		'English' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					This site uses cookies.
				<br>
					By continuing to browse you agree to the use of cookies in accordance with Regulation (EU) 2016/679
				</a>
			"
		], 
		'Spanish' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Este sitio utiliza cookies.
				<br>
					Al continuar navegando, acepta el uso de cookies de acuerdo con el Reglamento (UE) 2016/679
				</a>
			"
		], 
		'French' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Ce site utilise des cookies.
				<br>
					En poursuivant votre navigation, vous acceptez l'utilisation de cookies conformément au règlement (UE) 2016/679
				</a>
			"
		], 
		'Turkish' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Bu site çerez kullanır.
				<br>
					Göz atmaya devam ederek, Yönetmelik (AB) 2016/679 uyarınca tanımlama bilgilerinin kullanılmasını kabul etmiş olursunuz.
				</a>
			"
		], 
		'Portuguese' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Este site usa cookies.
				<br>
					Ao continuar a navegar concorda com a utilização de cookies de acordo com o Regulamento (UE) 2016/679
				</a>
			"
		], 
		'Romanian' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Acest site folosește cookie-uri.
				<br>
					Continuând navigarea, sunteți de acord cu utilizarea cookie-urilor în conformitate cu Regulamentul (UE) 2016/679
				</a>
			"
		], 
		'Dutch' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Deze site maakt gebruik van cookies.
				<br>
					Door verder te bladeren gaat u akkoord met het gebruik van cookies in overeenstemming met Verordening (EU) 2016/679
				</a>
			"
		], 
		'Polish' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Ta strona używa plików cookie.
				<br>
					Kontynuując przeglądanie, wyrażasz zgodę na używanie plików cookie zgodnie z rozporządzeniem (UE) 2016/679
				</a>
			"
		], 
		'Ukrainian' => [
			'RF1BP' => "
				<a class='APPEARANCE_footer_text_js APPEARANCE_DARK_footer_text_js hu' href='cookiepolicy.php' target='_blanck'>
					Цей сайт використовує файли cookie.
				<br>
					Продовжуючи перегляд, ви погоджуєтеся на використання файлів cookie відповідно до Регламенту (ЄС) 2016/679
				</a>
			"
		]
	];
?>