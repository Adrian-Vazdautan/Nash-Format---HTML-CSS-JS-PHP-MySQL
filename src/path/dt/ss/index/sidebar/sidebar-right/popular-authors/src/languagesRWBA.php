<?php
	if(isset($_COOKIE['choosed_language'])){
    	$selectedLanguage = $_COOKIE['choosed_language'];
	} else{
		$selectedLanguage = 'English';
	}

	$languagesRWBA = [
		'English' => [
			'Top10popularAuthorsForLastHour' => "Top 10 popular authors for last hour",
			'Top10popularAuthorsForLastYear' => "Популярные"
		], 
		'Spanish' => [
			'Top10popularAuthorsForLastHour' => "Las 10 mejores autoras populares de la última hora",
			'Top10popularAuthorsForLastYear' => "Las 10 mejores autoras populares"
		], 
		'French' => [
			'Top10popularAuthorsForLastHour' => "Top 10 des auteurs populaires de la dernière heure",
			'Top10popularAuthorsForLastYear' => "Top 10 des auteurs populaires"
		], 
		'Turkish' => [
			'Top10popularAuthorsForLastHour' => "Son bir saatin en popüler 10 yazarı",
			'Top10popularAuthorsForLastYear' => "Geçen yılın en popüler 10 yazarı"
		], 
		'Portuguese' => [
			'Top10popularAuthorsForLastHour' => "Top 10 autores populares da última hora",
			'Top10popularAuthorsForLastYear' => "Os 10 autores mais populares"
		], 
		'Romanian' => [
			'Top10popularAuthorsForLastHour' => "Top 10 autori populari pentru ultima oră",
			'Top10popularAuthorsForLastYear' => "Top 10 autori populari"
		], 
		'Dutch' => [
			'Top10popularAuthorsForLastHour' => "Top 10 populaire auteurs van het afgelopen uur",
			'Top10popularAuthorsForLastYear' => "Top 10 populaire auteurs"
		], 
		'Polish' => [
			'Top10popularAuthorsForLastHour' => "10 najpopularniejszych autorów z ostatniej godziny",
			'Top10popularAuthorsForLastYear' => "10 najpopularniejszych autorów"
		], 
		'Ukrainian' => [
			'Top10popularAuthorsForLastHour' => "10 найпопулярніших авторів за останню годину",
			'Top10popularAuthorsForLastYear' => "10 найпопулярніших авторів"
		]
	];
?>