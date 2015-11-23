<?php
	include "admin/connection.php";
?>
<div class="container">
	<div id="cvContent" class="row col-xs-11 col-md-10 col-xs-offset-1 sectionContent">
		<!-- Tabs for CV -->
		<ul class="nav nav-tabs">
		    <li class="active"><a data-toggle="tab" href="#informations">Informations</a></li>
		    <li><a data-toggle="tab" href="#formations">Formations</a></li>
		    <li><a data-toggle="tab" href="#competences">Compétences spécifiques</a></li>
		    <li><a data-toggle="tab" href="#experience">Expérience professionnelle</a></li>
		    <li><a data-toggle="tab" href="#interests">Centres d'intérêts et divers</a></li>
		</ul>

		<!-- Contents -->
		<div class="tab-content">
		    <div id="informations" class="tab-pane fade in active">
		        <h2>Informations</h2>
		        <p>Tom CHANUSSOT</p>
		        <p>Né le 09/09/1992</p>
		        <p>10 Chemin de Dussin 38110 Saint Clair de la Tour</p>
		  		<p>Permis B</p>
		  		<p>tom.chanussot@gmail.com</p>
		  		<p>04 74 97 65 83</p>
		  		<p>06 01 72 35 56</p>
		  		<p><strong>Statut : en recherche d'emploi</strong></p>
		  		<a href="https://www.linkedin.com/pub/tom-chanussot/66/730/450" target="_blank">
					<img width="50px" height="50px" src="resources/images/logo-linkedIn.png" alt="linkedIn"/>
				</a>
				<a href="http://fr.viadeo.com/fr/profile/tom.chanussot" target="_blank">
					<img width="50px" height="50px" src="resources/images/logo-viadeo.jpg" alt="viadeo"/>
				</a>
		    </div>
		    <div id="formations" class="tab-pane fade">
		        <h2>Formations</h2>
		        <p><span class="period">Sept. 2012 – Nov. 2013 : </span>Bachelor Informatique et réseaux de télécommunication en alternance à l'école CPE Lyon</p>
				<p><span class="period">2010 – 2012 : </span>DUT spécialité Informatique à l'IUT2 de Grenoble.</p>
				<p><span class="period">Juillet 2010 : </span>Baccalauréat Scientifique (S) option mathématiques au lycée Élie Cartan à la Tour du Pin.</p>
		    </div>
		    <div id="competences" class="tab-pane fade">
		    	<h2>Compétences spécifiques</h2>
		    	<ul>
			    	<?php
					$reponse = $bdd->query('SELECT content FROM competences ORDER BY `order` ASC');
					$competences = $reponse->fetchAll();
					foreach ($competences as $comp) {
					?>
				       <li><?php echo$comp['content'] ?></li>
			    	<?php } ?>
		    	</ul>
		 	</div>
		    <div id="experience" class="tab-pane fade">
		        <h2>Expérience professionnelle</h2>
		        <?php
				$reponse = $bdd->query('SELECT * FROM experiences ORDER BY `order` ASC');
				$experiences = $reponse->fetchAll();
				foreach ($experiences as $exp) {
				?>
			       <p><span class="period"><?php echo$exp['dates'] ?></span><?php echo$exp['infos'] ?><br/><?php echo$exp['description'] ?><br/>Technologies utilisées : <strong><?php echo$exp['technologies'] ?></strong></p>
		    	<?php } ?>
		    </div>
		    <div id="interests" class="tab-pane fade">
		        <h2>Centres d'intérêts et divers</h2>
		        <p>Badminton en compétition. 
		        	<br/><br/>Encadrement de jeunes à la pratique du badminton (2009).
		        	<br/><br/>Musique, sport, , les récits fantastiques, les tours de magies, les jeux de société.
		        	<br/><br/>Voyages : Irlande, Portugual, Canada, Nouvelle Zélande, Suisse, Allemagne, Suède.
		        	<br/><br/> Projets personnels :
		        	<?php
					$reponse = $bdd->query('SELECT * FROM projets p WHERE p.type="Personnel"');
					$projets = $reponse->fetchAll();

					foreach ($projets as $projet) {
						echo $projet["nom"].", ";
					}
					?>
		        </p>
		    </div>
		</div>
		<div id="btnDownloadCv">
			<a class="btn btn-primary pull-right" href="download_cv.php" type="button">
				<span class="glyphicon glyphicon-download-alt"></span>
				<span class="btnDownloadCvText">Download CV</span>
			</a>
		</div>
	</div>
</div>