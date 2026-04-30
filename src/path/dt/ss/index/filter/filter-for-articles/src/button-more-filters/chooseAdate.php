<?php 
	require_once "src/path/dt/ss/index/filter/filter-for-articles/src/languages_2.php";
?>
<!--START : Calendar-->
	<script>
		const caldd = [
				"<?= $languages[$selectedLanguage]['january'];?>", 
				"<?= $languages[$selectedLanguage]['february'];?>", 
				"<?= $languages[$selectedLanguage]['march'];?>", 
				"<?= $languages[$selectedLanguage]['april'];?>", 
				"<?= $languages[$selectedLanguage]['may'];?>", 
				"<?= $languages[$selectedLanguage]['june'];?>", 
				"<?= $languages[$selectedLanguage]['july'];?>", 
				"<?= $languages[$selectedLanguage]['august'];?>", 
				"<?= $languages[$selectedLanguage]['september'];?>", 
				"<?= $languages[$selectedLanguage]['october'];?>", 
				"<?= $languages[$selectedLanguage]['november'];?>", 
				"<?= $languages[$selectedLanguage]['december'];?>"
			];
	</script>
	<div class="cadn1js pf w100 h100 dg alc jcc l0 t0 none" data-status="hidden">
		<div class="APPEARANCE_choose_a_date_js APPEARANCE_DARK_choose_a_date_js cadn2js p bgw br12">
			<div class="cadn3 p t0 l0 pa mobile_dg_alc_jcc">
				<div class="mobile_dg_alc_jcc">
					<div class="mobile_width_380 mobile_pa20 mobile_calendar_wrapp">
						<div class="APPEARANCE_calendar_title_js APPERANCE_DARK_text_css cadn5 p l f18">
							<?= $languages[$selectedLanguage]['chooseAdate'];?>
						</div>
						<div class="p l w16">
							<div class="cadn41 p r w16 h16 c" title="<?= $languages[$selectedLanguage]['close'];?>" onclick="cadclose()"></div>
						</div>
						<div class="w100 p l f14 mt20 mobile_width_340">
							<div class="APPEARANCE_calendar_FROM_js APPERANCE_DARK_text_css p l">
								<?= $languages[$selectedLanguage]['from'];?>
							</div>
							<div class="APPEARANCE_calendar_UPTO_js APPERANCE_DARK_text_css p l ml20">
								<?= $languages[$selectedLanguage]['upTo'];?>
							</div>
						</div>
						<div class="cadn6 p l w100 mt10 mobile_width_340">
							<input type="date" class="APPEARANCE_calendar_input_FROM_js APPEARANCE_calendar_input_FROM_UPTO_css cadn61 cadn611js daceljs p l f14 br4 pal10" value="2019-10-01" onclick="sifcad(0)" onchange="daceljsELC()" title="Date">
							<input type="date" class="APPEARANCE_calendar_input_UPTO_js APPEARANCE_calendar_input_FROM_UPTO_css cadn62 cadn612js daceljs p l ml20 pal10 f14 br4 checkedBluejs" value="<?= date("Y-m-d"); ?>" onclick="sifcad(1)" title='Date' onchange="daceljsELC()">
						</div>
						<div class="cadn7 p l w100 mt20 mb20 mobile_width_340">
							<div class="APPEARANCE_calendar_move_left_js APPERANCE_DARK_text_css cadn71 p l dg alc jcc" onclick="swcalda(0)">
								&#10094;
							</div>
							<div class="cadn72 p l jcc">
								<div class="APPEARANCE_calendar_name_js APPERANCE_DARK_text_css cadn72a p l t fw f14"></div>
							</div>
							<div class="APPEARANCE_calendar_move_right_js APPERANCE_DARK_text_css cadn71 p l dg alc jcc" onclick="swcalda(1)">
								&#10095;
							</div>
						</div>
						<div class="p l w100 mb10 u mobile_width_340">
							<div class="APPEARANCE_calendar_nr_1F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['m'];?></div>
							<div class="APPEARANCE_calendar_nr_2F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['t'];?></div>
							<div class="APPEARANCE_calendar_nr_3F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['w'];?></div>
							<div class="APPEARANCE_calendar_nr_4F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['t'];?></div>
							<div class="APPEARANCE_calendar_nr_5F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['f'];?></div>
							<div class="APPEARANCE_calendar_nr_6F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['s'];?></div>
							<div class="APPEARANCE_calendar_nr_7F7_js APPERANCE_DARK_text_css cadn81 wf cs p l t f14 fw pa10"><?= $languages[$selectedLanguage]['s'];?></div>
						</div>
						<div class="cadn9 p l w100 pab10 u mobile_width_340">
							<!--START SPACE-->
								<div class="ca10js wf cs p l t f14 none"></div>
								<div class="ca10js wf cs p l t f14 none"></div>
								<div class="ca10js wf cs p l t f14 none"></div>
								<div class="ca10js wf cs p l t f14 none"></div>
								<div class="ca10js wf cs p l t f14 none"></div>
								<div class="ca10js wf cs p l t f14 none"></div>
								<div class="ca10js wf cs p l t f14 none"></div>
							<!--START SPACE-->
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(0)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(1)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(2)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(3)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(4)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(5)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(6)"></div>

							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(7)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(8)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(9)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(10)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(11)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(12)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(13)"></div>

							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(14)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(15)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(16)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(17)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(18)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(19)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(20)"></div>

							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(21)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(22)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(23)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(24)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(25)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(26)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(27)"></div>

							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(28)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(29)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(30)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(31)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(32)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(33)"></div>
							<div class="ca9js ca9hjs wf cs p l t f14" onclick="fwcd(34)"></div>
						</div>
						<div class="p l w100 mobile_width_340">
							<input type="submit" class="btn_filter_id_apply_js cadn101 p l w100 br4 t f14 mt20" value="<?= $languages[$selectedLanguage]['apply'];?>" onclick="ssdts()">
							<input type="submit" class="cadn102 p l w100 bgw br4 t mt10 mb20 f14" value="<?= $languages[$selectedLanguage]['cancel'];?>" onclick="cadclose()">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--END-->