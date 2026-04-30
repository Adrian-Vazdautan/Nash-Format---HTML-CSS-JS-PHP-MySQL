<div class="changepaswjs pf w100 h100 dg alc jcc l0 t0" data-status="open" style="display: none;">
	<div class="APPEARANCE_change_password_js APPEARANCE_DARK_change_password_js passw2js p bgw br12">
		<div class="cadn3 p t0 l0 pa">
			<!--START : Title-->
				<div class="APPEARANCE_settings_si_change_password_js APPERANCE_DARK_text_css cadn5 p l f18">
					Ты че паранойк?
				</div>
			<!--END-->
			<!--START : Close-->
				<div class="p l w16">
					<div class="cadn41 p r w16 h16 c" title="Close" onclick="passwclose()"></div>
				</div>
			<!--END-->
			<!--START : Current password-->
				<div class="APPEARANCE_settings_si_current_password_js APPERANCE_DARK_text_css p l mt20 w100 f14 fw">
					Тут твой пароль
				</div>
				<input type="password" class="r_current_password_js mt10 w100 br4 h32 pal10 risbs oun" onclick="redisbs_r_current_password()" data-error="1">
				<div class="mt10 w100 f14 cr err_r_current_password_js"></div>
			<!--END-->
			<!--START : New password-->
				<div class="APPEARANCE_settings_si_new_password_js APPERANCE_DARK_text_css mt20 w100 f14 fw">
					Новый пароль
				</div>
				<input type="password" class="r_new_password_js mt10 w100 br4 h32 pal10 risbs oun" onclick="redisbs_r_new_password()" data-error="1">
				<div class="mt10 w100 f14 cr err_r_new_passwordjs"></div>
			<!--END-->
			<!--START : Re-enter your new password-->
				<div class="APPEARANCE_settings_si_reenter_new_password_js APPERANCE_DARK_text_css mt20 w100 f14 fw">
					Повтори
				</div>
				<input type="password" class="r_reenter_new_password_js mt10 w100 br4 h32 pal10 risbs oun" onclick="redisbs_r_reenter_new_password_()" data-error="1">
				<div class="mt10 w100 f14 cr err_r_reenter_new_password_js"></div>
			<!--END-->
			<!--START : Buttons-->
				<div class="p l w100">
					<input type="submit" class="btn_filter_id_apply_js p l w100 br4 t f14 mt20 cadn101_dark_mode" value="Поменяйте быстреейй!!" onclick="save_new_password()">
					<input type="submit" class="cadn102 p l w100 bgw br4 t mt10 mb20 f14" value="Не паранойк" onclick="passwclose()">
				</div>
			<!--END-->
		</div>
	</div>
</div>