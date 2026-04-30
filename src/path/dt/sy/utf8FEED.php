<meta charset="UTF-8">
<script>
	if(localStorage.getItem("appearance") == "dark_mode"){
		if(document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]')){
			document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]').setAttribute('content', '#262B31');
			document.querySelector('meta[name="theme-color"]').setAttribute('content', '#262B31');
		}
	}

	else if(localStorage.getItem("appearance") == "light_mode"){
		if(document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]')){
			document.querySelector('meta[name="apple-mobile-web-app-status-bar-style"]').setAttribute('content', '#1b4e81');
			document.querySelector('meta[name="theme-color"]').setAttribute('content', '#1b4e81');
		}
	}
</script>