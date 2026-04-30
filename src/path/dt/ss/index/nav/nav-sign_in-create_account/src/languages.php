<?php
	if(isset($_COOKIE['choosed_language'])){
    	$selectedLanguage = $_COOKIE['choosed_language'];
	} else{
		$selectedLanguage = 'English';
	}

	$languages = [
		'English' => [
			'close'             => "Закрой",
			'createYourAccount' => "Сделай мне аккаунт",
			'email'             => "Почта",
			'username'          => "Имя",
			'password'          => "Пароль",
			'rules'             => "By creating account, I agree to <a href='terms.php' target='_blank' class='f14 royalblue';'>Terms of service</a> and <a href='privacy.php' target='_blank' class='f14 royalblue';'>Privacy policy</a>, including <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Cookie use.</a>",
			'register'          => "Делай быстрее",
			'cancel'            => "Пойду курить"
		], 
		'Spanish' => [
			'close'             => "Cerca",
			'createYourAccount' => "Crea tu cuenta",
			'email'             => "Correo electrónico",
			'username'          => "Nombre de usuario",
			'password'          => "Contraseña",
			'rules'             => "Al crear una cuenta, acepto <a href='terms.php' target='_blank' class='f14 royalblue';'>Términos de servicio</a> y <a href='privacy.php' target='_blank' class='f14 royalblue';'>Política de privacidad</a>, incluida <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Uso de cookies.</a>",
			'register'          => "Registro",
			'cancel'            => "Cancelar"
		], 
		'French' => [
			'close'             => "Fermer",
			'createYourAccount' => "Créez votre compte",
			'email'             => "E-mail",
			'username'          => "Nom d'utilisateur",
			'password'          => "Mot de passe",
			'rules'             => "En créant un compte, j'accepte <a href='terms.php' target='_blank' class='f14 royalblue';'>Conditions d'utilisation</a> et <a href='privacy.php' target='_blank' class='f14 royalblue';'>Politique de confidentialité</a>, y compris <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Utilisation des cookies.</a>",
			'register'          => "Registre",
			'cancel'            => "Annuler"
		], 
		'Turkish' => [
		    'close'             => "Kapalı",
			'createYourAccount' => "Hesabını oluştur",
			'email'             => "E-posta",
			'username'          => "Kullanıcı adı",
			'password'          => "Şifre",
			'rules'             => "Hesap oluşturarak şunu kabul ediyorum <a href='terms.php' target='_blank' class='f14 royalblue';'>Kullanım Şartları</a> ve <a href='privacy.php' target='_blank' class='f14 royalblue';'>Gizlilik Politikası</a>, içermek <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Çerez kullanımı.</a>",
			'register'          => "Kayıt olmak",
			'cancel'            => "İptal etmek"
		], 
		'Portuguese' => [
		    'close'             => "Fechar",
			'createYourAccount' => "Crie sua conta",
			'email'             => "E-mail",
			'username'          => "Nome de usuário",
			'password'          => "Senha",
			'rules'             => "Ao criar uma conta, eu concordo em <a href='terms.php' target='_blank' class='f14 royalblue';'>Termos de serviço</a> e <a href='privacy.php' target='_blank' class='f14 royalblue';'>Política de Privacidade</a>, incluindo <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Uso de cookies.</a>",
			'register'          => "Registro",
			'cancel'            => "Cancelar"
		], 
		'Romanian' => [
		    'close'             => "Închide",
			'createYourAccount' => "Creeaza-ti contul",
			'email'             => "E-mail",
			'username'          => "Nume de utilizator",
			'password'          => "Parola",
			'rules'             => "Prin crearea contului, sunt de acord <a href='terms.php' target='_blank' class='f14 royalblue';'>Termenii serviciului</a> și <a href='privacy.php' target='_blank' class='f14 royalblue';'>Politica de confidențialitate</a>, inclusiv <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Utilizarea cookie-urilor.</a>",
			'register'          => "Inregistreaza-te",
			'cancel'            => "Anulare"
		], 
		'Dutch' => [
		    'close'             => "Dichtbij",
			'createYourAccount' => "Maak een account aan",
			'email'             => "E-mail",
			'username'          => "Gebruikersnaam",
			'password'          => "Wachtwoord",
			'rules'             => "Door een account aan te maken, ga ik hiermee akkoord <a href='terms.php' target='_blank' class='f14 royalblue';'>Servicevoorwaarden</a> en <a href='privacy.php' target='_blank' class='f14 royalblue';'>Privacybeleid</a>, inbegrepen <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Cookiegebruik.</a>",
			'register'          => "Register",
			'cancel'            => "Annuleren"
		], 
		'Polish' => [
		    'close'             => "Zamknąć",
			'createYourAccount' => "Utwórz swoje konto",
			'email'             => "E-mail",
			'username'          => "Nazwa użytkownika",
			'password'          => "Hasło",
			'rules'             => "Tworząc konto wyrażam zgodę <a href='terms.php' target='_blank' class='f14 royalblue';'>Warunki usługi</a> i <a href='privacy.php' target='_blank' class='f14 royalblue';'>Polityka prywatności</a>, w tym <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Wykorzystanie plików cookie.</a>",
			'register'          => "Rejestr",
			'cancel'            => "Anulować"
		], 
		'Ukrainian' => [
		    'close'             => "Закрити",
			'createYourAccount' => "Створити свій обліковий запис",
			'email'             => "Електронна пошта",
			'username'          => "Ім'я користувача",
			'password'          => "Пароль",
			'rules'             => "Створюючи обліковий запис, я погоджуюся <a href='terms.php' target='_blank' class='f14 royalblue';'>Умови використання</a> і <a href='privacy.php' target='_blank' class='f14 royalblue';'>Політика конфіденційності</a>, в тому числі <a href='cookiepolicy.php' target='_blank' class='f14 royalblue';'>Використання файлів cookie.</a>",
			'register'          => "Зареєструватися",
			'cancel'            => "Скасувати"
		]
	];
?>