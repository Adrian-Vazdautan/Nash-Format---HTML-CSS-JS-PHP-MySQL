<?php
	require_once "src/languagesSidebarLeft.php";
?>
<!--START : SIDEBAR LEFT-->
	<div class='sijs c1js ab h100 mobile_none'>
		<div class="APPEARANCE_spwh_js DARK_THEME_COLOR_2 sid APPEARANCE_DARK_sid_js pf wi h100 pa">
			<div class="sidebar_wrapp">
				<!--START : Home-->
					<div class="sidebar_wrapp_HOME_js">
						<?php require "sidebar-menu/btn-home.php"; ?>
					</div>
				<!--END-->
					<div class="decor_HR_js"><!--HR--></div>
				<!--START : Topics-->
					<div class="sidebar_wrapp_TOPICS_js">
						<?php require "sidebar-menu/btn-topics.php"; ?>
					</div>
				<!--END-->
					<div class="decor_HR_js"><!--HR--></div>
				<!--START : Resources-->
					<div class="sidebar_wrapp_RESOURCES_js">
						<?php require "sidebar-menu/btn-resources.php"; ?>
					</div>
				<!--END-->
			</div>
		</div>
	</div>
<!--END-->
<?php require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-likes/likes.php"?>
<?php require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-history/history.php"?>
<?php require_once "src/path/dt/ss/index/sidebar/sidebar-left/sidebar-chat/chat.php"?>