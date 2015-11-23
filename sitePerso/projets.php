<?php
	include "admin/connection.php";
?>
<div class="container">
	<div id="projectsSlider" class="row col-xs-11 col-md-10 col-xs-offset-1 sectionContent">
		<?php
		$reponse = $bdd->query('SELECT * FROM projets');
		$projets = $reponse->fetchAll();
		$result = count($projets);

		//Slider items
		$i=1;
		foreach ($projets as $projet) {
		?>
			<div class="slide" data-anchor="slide<?php echo$i ?>">
				<div class="projectContent">
					<div class="screenshot col-xs-1 col-xs-offset-1">
						<img src="resources/images/<?php echo$projet['screenshot'] ?>"/>
					</div>
					<div class="infos col-xs-7 col-md-8 col-xs-offset-2 col-md-offset-1">
						<div class="infosItems">
							<h1><?php echo$projet['nom'] ?> </h1>
							<p> <span class="infosItem"> Type :</span> <?php echo$projet['type'] ?> </p>
							<p> <span class="infosItem"> Description :</span> <?php echo$projet['description'] ?> </p>
							<p> <span class="infosItem"> Technologies utilisées :</span> <?php echo$projet['technologies'] ?> </p>
							<span class="infosItem"> Liens d'accès au projet :</span> <a href="<?php echo$projet['lien'] ?>" target="_blank"> <?php echo$projet['lien'] ?> </a>
						</div>
					</div>
				</div>
			</div>
			<?php $i++; ?>
		<?php } ?>

		<div id="projectsMenu" class="col-xs-10 col-xs-offset-1">
			<ul class="list-inline">
			<?php for ($j=1; $j < $i; $j++) { ?>
				<li id="projectsMenuslide<?php echo$j ?>">
					<a href="#Projects/slide<?php echo$j ?>">
						<?php echo $projets[$j-1]['nom']; ?>
					</a>
				</li>
			<?php } ?>
			</ul>
		</div>

		<?php $reponse->closeCursor(); ?>  	
	</div>
</div>


