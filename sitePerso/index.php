<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="resources/js/fullPage.js/jquery.fullPage.css">
		<link rel="stylesheet" href="resources/styles/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="resources/styles/css/normalize.css" />
		<link rel="stylesheet" href="resources/styles/css/set2.css" />
		<link rel="stylesheet" href="resources/styles/style.css" />
		<link rel="icon" type="image/png" href="resources/images/favicon-32x32.png" sizes="32x32">
        <title>Tom CHANUSSOT CV</title>
    </head>

    <body>
        
		<div id="miniMenu">		
			<div id="miniMenuItemHome">
				<h2>Home</h2>
			</div>
			<div id="miniMenuItemAbout">
				<h2>A propos</h2>
			</div>
			<div id="miniMenuItemCv">
				<h2>CV</h2>
			</div>	
			<div id="miniMenuItemProjects">
				<h2>Projets</h2>
			</div>	
		</div>

		<div id="fullpage">
		    <div class="section">
				<?php
					include "home.php";
				?>
		    </div>
		    <div class="section">
		    	<?php
					include "a_propos.php";
				?>
			</div>
		    <div class="section">
		    	<?php
					include "cv.php";
				?>
			</div>
		    <div class="section">
		    	<?php
					include "projets.php";
				?>
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="resources/js/fullPage.js/jquery.fullPage.min.js"></script>
		<script src="resources/styles/bootstrap/js/bootstrap.min.js"></script>
		<script src="resources/js/site_perso.js"></script>
    </body>
</html>
