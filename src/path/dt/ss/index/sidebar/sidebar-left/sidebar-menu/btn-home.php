<!--START : home-->
	<div class="btn_home_js c APPEARANCE_DARK_btn_HOME_js APPEARANCE_DARK__HOVER__btn_sidebar_js" onclick="goToFeed()">
		<div class="btn_home_ICON_js APPEARANCE_DARK_btn_home_ICON_js"><!--ICON--></div>
		<div class="btn_home_TITLE_js APPEARANCE_DARK_btn_home_TITLE_js">
			<?php echo $languagesSidebarLeft[$selectedLanguage]['Home'];?>
		</div>
	</div>
<!--END-->
<!--START : likes-->
	<div class="btn_likes_js c APPEARANCE_DARK__HOVER__btn_sidebar_js" onclick="showPopUpInrerfaceLikes()">
		<div class="btn_likes_ICON_js APPEARANCE_DARK_btn_likes_ICON_js"><!--ICON--></div>
		<div class="btn_likes_TITLE_js APPEARANCE_DARK_btn_likes_TITLE_js">
			<?php echo $languagesSidebarLeft[$selectedLanguage]['Likes'];?>
		</div>
	</div>
<!--END-->
<!--START : history-->
	<div class="btn_history_js c APPEARANCE_DARK__HOVER__btn_sidebar_js" onclick="showPopUpInrerfaceHistory()">
		<div class="btn_history_ICON_js APPEARANCE_DARK_btn_history_ICON_js"><!--ICON--></div>
		<div class="btn_history_TITLE_js APPEARANCE_DARK_btn_history_TITLE_js">
			<?php echo $languagesSidebarLeft[$selectedLanguage]['Historic'];?>
		</div>
	</div>
<!--END-->