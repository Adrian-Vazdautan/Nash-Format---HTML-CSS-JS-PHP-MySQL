<?php
	#START : Проверка наличия активной сессии
        require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/session_start.php");
    #END
    #START : Check if user is auth
	    	require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/connectDB.php");
	    //Проверяем, есть ли куки авторизации
		    if(isset($_COOKIE['auth_token'])){
		        //Если куки есть, находим пользователя по токену в базе данных
			        $token = mysqli_real_escape_string($connect, $_COOKIE['auth_token']);
			        $query = mysqli_query($connect, "SELECT * FROM users WHERE token = '$token'");
			        $result = mysqli_fetch_assoc($query);

			        if($result){
			            //Если пользователь найден по токену, авторизуем его
			                $_SESSION["user"] = [
			                    "avatar"      => $result["avatar"],
			                    "nickname"    => $result["nickname"],
			                    "id"          => $result["id"],
			                    "type"        => $result["type"],
			                    "code"        => "",
			                    "code_status" => "false",
			                    "code_email"  => ""
			                ];
			        }
		    }
    #END

	if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
	    header("Location: feed.php");
	    exit();
	}

	if(isset($_SESSION["admin"]) && !empty($_SESSION["admin"])){
	     header("Location: feed.php");
	    exit();
	}

	if(isset($_SESSION["admin"]) && isset($_SESSION["admin"]["status"]) && $_SESSION["admin"]["status"] == "true"){
	    header("Location: admin.php");
	    exit();
	}
?>

<!DOCTYPE html>
<html lang='en-US'>
<head>
	<?php require_once "src/path/dt/sy/utf8.php";?>
	<?php require_once "src/path/dt/sy/titlehtml.php";?>
	<?php require_once "src/path/dt/sy/stylecss.php";?>
	<?php require_once "src/path/dt/sy/scriptjs.php";?>
</head>
<body class="APPEARANCE_body_js overflowjs DARK_THEME_COLOR_2">
	<!--START : Preloader-->
		<?php require_once "src/path/dt/sy/preloader.php"; ?>
	<!--END-->
	<!--START : Offline-->
		<?php require_once "src/path/dt/sy/offline.php"; ?>
	<!--END-->
	<!--START : Chat-->
		<div class='noduplicate001_chat_js'>
			<?php require "src/path/dt/sy/noduplicate001_chat.php"; ?>
		</div>
	<!--END-->
	<div class="root p">
		<div class="w p">
			<!--START : REGISTRATION POP UP-->
				<?php require_once "src/path/dt/ss/index/nav/nav-sign_in-create_account/registrationInSystem.php";?>
			<!--END-->
			<!--START : FORGOT-PASSWORD POP UP-->
				<?php require_once "src/path/dt/ss/index/nav/nav-sign_in-recover_access/forgot-password.php";?>
			<!--END-->
			<!--START : CHOOSE-A-DATE POP UP-->
				<?php require_once "src/path/dt/ss/index/filter/filter-for-articles/src/button-more-filters/chooseAdate.php";?>
			<!--END-->
			<!--START : UNAUTHORIZED POP UP-->
				<?php require_once "src/path/dt/ss/index/nav/nav-sign_in/unauthorized.php";?>
			<!--END-->
			<!--START : SHARE POP UP-->
				<?php require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-home/sidebar-home-articles-share/sidebar-home-articles-share.php";?>
			<!--END-->
			<div class="pvhlzhdj_desk pvhlzhdj_mobile mainNAVjs pf h57 l0 z3 hmd df jcc appearance_nr_1_dual_js">
		        <!--START : Mobile : ROW-BANNER-->
					<div class="mobile_AD_js MRB_index_php_js w100 ab noneDesk">
						<?php require($_SERVER['DOCUMENT_ROOT'] . "/src/path/dt/sy/mobile_AD.php"); ?>
					</div>
				<!--END-->
				<div class="hm p">
					<div class="hm_wrapp">
						<div class="pf l0 vw100 mhwdec"></div>
						<!--START : MENU-->
							<?php require "src/path/dt/ss/index/nav/nav-menu/button-menu.php";?>
						<!--END-->
						<!--START : LOGO-->
							<?php require "src/path/dt/ss/index/nav/nav-logo/logo.php";?>
						<!--END-->
						<!--START : SEARCH-->
							<?php require "src/path/dt/ss/index/nav/nav-search/thnk-search.php";?>
						<!--END-->
						<div>
							<!--START : LANGUAGE-->
								<?php require "src/path/dt/ss/index/nav/nav-region/popUpWindowLanguage.php";?>
							<!--END-->
							<!--START : CONNECT-->
								<?php require "src/path/dt/ss/index/nav/nav-sign_in/popUpWindowCnct.php";?>
							<!--END-->
							<!--START : MENU-->
								<?php require "src/path/dt/ss/index/nav/nav-menu/menu.php"; ?>
							<!--END-->
							<!--START : MOBILE-->
								<!--START : Search-->
									<div class="m13 u c mobile_search_button_js" onclick="mobile_search()"><!--SEARCH--></div>
								<!--END-->
								<div class="wrapp_mobile_SIGNIN_AND_REGISTER_css noneDesk">
									<div class="p r">
										<!--START : [2] Sign Up-->
											<div class="mobile_signup_button_js m12si u c" onclick="registrationWindow()">
												<div class="mobile_signup_button_EL_js">Заходи</div>
											</div>
										<!--END-->
										<!--START : [1] Sign In-->
											<div class="mobile_signin_button_js m12si u c">
												<div class="mobile_signin_button_EL_js" onclick="unauthorized()">Заходи</div>
											</div>
										<!--END-->
									</div>
								</div>
							<!--END-->
						</div>
						<div class="sjs"></div>
						<!--START : LOADING-->
							<div class="id_loading_decor_css_js">
								<div class="id_loading_0p_to_100p_js none"></div>
							</div>
						<!--END-->
					</div>
				</div>
			<div class="m p">
				<div class="rfb0 pf vh100"></div>
				<!--START : ARTICLES-->
					<?php
						if(strpos($_SERVER['REQUEST_URI'], "/index.php") !== false || $_SERVER['REQUEST_URI'] == "/" || strpos($_SERVER['REQUEST_URI'], "/article.php") !== false) {
							/*DUPLICATE 001*/
								echo "<div class='APPEARANCE_iiasfj_js DARK_THEME_COLOR_2 id_index_articles_session_false_js a p l'>";
									/*START : BLUE*/
										require "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-left.php";
									/*END*/
									/*START : GREEN*/
										require "src/path/dt/sy/noduplicate002.php";
									/*END*/
								echo "</div>";
							/*DUPLICATE 001*/
						}
					?>
				<!--END-->
			</div>
		</div>
	</div>
	<?php require_once "src/path/dt/ss/index/nav/nav-sign_in/src/languagesCnct.php";?>
	<?php require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-home/sidebar-home-articles/src/languagesArticle.php";?>
	<script>
		/*START : Session : false*/
			//Set Appearance mode : Auto
				localStorage.setItem("appearance_mode", "Auto");
		/*END*/
	</script>
	<script>
		//LanguagesCnct
			var tslf_SignIn = "<?php echo $languagesCnct[$selectedLanguage]['SignIn'];?>",
				tslf_Cancel = "<?php echo $languagesCnct[$selectedLanguage]['Cancel'];?>";
		//LanguagesArticle
			var tslf_AddAreply = "<?php echo $languagesArticle[$selectedLanguage]['AddAreply'];?>";
	</script>
	<script>
		//System messages
			var field_is_required             = "Отвечай",
				minimum_length_5_characters   = "Надо больше букв, хотябы 5",
				email_is_already_used         = "Другая почта!",
				this_username_is_already_used = "Ты опоздал, это имя уже заняли";
	</script>
	<script>localStorage.setItem("session", "false");</script>
	<!--START : ALERT/ANOUNCE/Warning (Session : true). 2 copies-->
		<div class="warning_session_true_false_js pf l0 t0 pal10 par10 w100">
			<div class="warning_background br12 w100 f14 dg alc jcc">
				<!--START : MESSAGE-->
					<div class="wasetr_innerText_js f18 t"></div>
				<!--END-->
			</div>
		</div>
	<!--END-->
	<script>
		//userWhichSignIn
			localStorage.setItem("userWhichSignIn", null);
		//ID of userWhichSignIn
			localStorage.setItem("IDofUserWhichSignIn", null);
		//Which page is opened
			localStorage.setItem("whichPageIsOpened", "feed");
		//Menu not created
			localStorage.setItem("menu", "0");
	</script>
</body>
</html>