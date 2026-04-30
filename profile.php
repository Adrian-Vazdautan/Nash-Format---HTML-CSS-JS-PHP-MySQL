<?php
	require "src/path/dt/ss/feed/feed.php";
?>
<script>
	/*Show : user-profile->*/document.getElementsByClassName("mwupwsnjs")[0].classList.remove("none");
	/*Hide : articles->*/document.getElementsByClassName("id_index_articles_session_true_js")[0].classList.add("none");
	//Which page is opened
		localStorage.setItem("whichPageIsOpened", "profile");
</script>