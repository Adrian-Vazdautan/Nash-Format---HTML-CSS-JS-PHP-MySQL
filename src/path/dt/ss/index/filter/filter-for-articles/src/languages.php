<?php
	if(isset($_COOKIE['choosed_language'])){
    	$selectedLanguage = $_COOKIE['choosed_language'];
	} else {
		$selectedLanguage = 'English';
	}

	$languages = [
		'English' => [
			'New'         => "Все",
			'TheBest'     => "Лучшие",
			'Day'         => "День",
			'Week'        => "Неделя",
			'Month'       => "Месяц",
			'Year'        => "Год",
			'Alltime'     => "Все",
			'Morefilters' => "Еще фильтры",
			'chooseAdate' => "Моя дата"
		], 
		'Spanish' => [
			'New'         => "Nuevo",
			'TheBest'     => "El mejor",
			'Day'         => "Día",
			'Week'        => "Semana",
			'Month'       => "Mes",
			'Year'        => "Año",
			'Alltime'     => "En cualquier momento",
			'Morefilters' => "Más filtros",
			'chooseAdate' => "Elige una fecha"
		], 
		'French' => [
			'New'         => "Nouveau",
			'TheBest'     => "Le meilleur",
			'Day'         => "Jour",
			'Week'        => "Semaine",
			'Month'       => "Mois",
			'Year'        => "Année",
			'Alltime'     => "À tout moment",
			'Morefilters' => "Plus de filtres",
			'chooseAdate' => "Choisissez une date"
		], 
		'Turkish' => [
			'New'         => "Yeni",
			'TheBest'     => "En iyisi",
			'Day'         => "Gün",
			'Week'        => "Hafta",
			'Month'       => "Ay",
			'Year'        => "Yıl",
			'Alltime'     => "İstediğin zaman",
			'Morefilters' => "Daha fazla filtre",
			'chooseAdate' => "Bir tarih seçin"
		], 
		'Portuguese' => [
			'New'         => "Novo",
			'TheBest'     => "O melhor",
			'Day'         => "Dia",
			'Week'        => "Semana",
			'Month'       => "Mês",
			'Year'        => "Ano",
			'Alltime'     => "A qualquer momento",
			'Morefilters' => "Mais filtros",
			'chooseAdate' => "Escolha uma data"
		], 
		'Romanian' => [
			'New'         => "Nou",
			'TheBest'     => "Cel mai bun",
			'Day'         => "Zi",
			'Week'        => "Săptămână",
			'Month'       => "Lună",
			'Year'        => "An",
			'Alltime'     => "Oricând",
			'Morefilters' => "Mai multe filtre",
			'chooseAdate' => "Alegeți o dată"
		], 
		'Dutch' => [
			'New'         => "Nieuw",
			'TheBest'     => "Het beste",
			'Day'         => "Dag",
			'Week'        => "Week",
			'Month'       => "Maand",
			'Year'        => "Jaar",
			'Alltime'     => "Elk moment",
			'Morefilters' => "Meer filters",
			'chooseAdate' => "Kies een datum"
		], 
		'Polish' => [
			'New'         => "Nowy",
			'TheBest'     => "Najlepszy",
			'Day'         => "Dzień",
			'Week'        => "Tydzień",
			'Month'       => "Miesiąc",
			'Year'        => "Rok",
			'Alltime'     => "Kiedykolwiek",
			'Morefilters' => "Więcej filtrów",
			'chooseAdate' => "Wybierz datę"
		], 
		'Ukrainian' => [
			'New'         => "Новий",
			'TheBest'     => "Кращий",
			'Day'         => "День",
			'Week'        => "Тиждень",
			'Month'       => "Місяць",
			'Year'        => "Рік",
			'Alltime'     => "Будь-коли",
			'Morefilters' => "Більше фільтрів",
			'chooseAdate' => "Виберіть дату"
		]
	];
?>