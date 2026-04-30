<meta charset="UTF-8">
<script>
	//Проверяем локальное хранилище на значение appearance_mode
		if(localStorage.getItem('appearance_mode') == 'Auto'){
			//Определяем MediaQueryList для отслеживания изменений в предпочтениях цветовой схемы
				const darkModeQuery = window.matchMedia('(prefers-color-scheme: dark)');
			//Функция для изменения мета-тегов
				const applyTheme = (isDarkMode) => {
					if(isDarkMode){
						if(document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]')){
							document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]').setAttribute('content', '#262B31');
							document.querySelector('meta[name="theme-color"]').setAttribute('content', '#262B31');
						}
					} else {
						if(document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]')){
							document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]').setAttribute('content', '#1b4e81');
							document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1b4e81');
						}
					}
				};
			//Изначально применяем тему в зависимости от предпочтений пользователя
				applyTheme(darkModeQuery.matches);
			//Добавляем слушатель на изменения в предпочтениях цветовой схемы
				darkModeQuery.addEventListener('change', (event) => {
					applyTheme(event.matches);
				});
		}
</script>