<div class="changeusernamejs pf w100 h100 dg alc jcc l0 t0" data-status="open" style="display: none;">
	<div class="APPEARANCE_change_username_js APPEARANCE_DARK_change_username_js username2js p bgw br12">
		<div class="cadn3 p t0 l0 pa">
			<!--START : Title-->
				<div class="APPEARANCE_settings_fl_change_username_js APPERANCE_DARK_text_css cadn5 p l f18">
					А шо имя не нравится?
				</div>
			<!--END-->
			<!--START : Close-->
				<div class="p l w16">
					<div class="cadn41 p r w16 h16 c" title="Close" onclick="usernameclose()"></div>
				</div>
			<!--END-->
			<!--START : Current password-->
				<div class="APPEARANCE_settings_fl_current_password_js APPERANCE_DARK_text_css p l mt20 w100 f14 fw">
					Твой пароль
				</div>
				<input type="password" class="r_new_username_current_password_js mt10 w100 br4 h32 pal10 risbs oun" onclick="r_err_r_new_username_current_password()" data-error="1">
				<div class="mt10 w100 f14 cr err_r_new_username_current_password_js"></div>
			<!--END-->
			<!--START : New username-->
				<div class="APPEARANCE_settings_fl_new_username_js APPERANCE_DARK_text_css mt20 w100 f14 fw">
					Новая имя
				</div>
				<input type="text" class="r_new_username_js mt10 w100 br4 h32 pal10 risbs oun" onclick="r_err_r_new_usernam()" data-error="1">
				<div class="mt10 w100 f14 cr err_r_new_username_js"></div>
			<!--END-->
			<!--START : Buttons-->
				<div class="p l w100">
					<input type="submit" class="btn_filter_id_apply_js p l w100 br4 t f14 mt20 cadn101_dark_mode" value="Меняй" onclick="save_new_username()">
					<input type="submit" class="cadn102 p l w100 bgw br4 t mt10 mb20 f14" value="Передумал" onclick="usernameclose()">
				</div>
			<!--END-->
		</div>
	</div>
</div>