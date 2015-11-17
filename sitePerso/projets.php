<div class="container">
	<div id="projectsSlider" class="row col-xs-11 col-md-10 col-xs-offset-1 sectionContent">
		<?php
			try {
				$bdd = new PDO('mysql:host=localhost;dbname=site_perso;charset=utf8', 'root', '');
			}
			catch (Exception $e) {
				die('Erreur : ' . $e->getMessage());
			}
			$reponse = $bdd->query('SELECT * FROM projets');
			$projets = $reponse->fetchAll();
			$result = count($projets);

			//Slider items
			$i=1;
			foreach ($projets as $projet)
			{
				echo "<div class=\"slide\" data-anchor=\"slide".$i."\">";
					echo "<div class=\"projectContent\">";
						echo "<div class=\"screenshot col-xs-1 col-xs-offset-1\">";
							echo "<img src=\"resources/images/".$projet['screenshot']."\"/>";
						echo "</div>";
						echo "<div class=\"infos col-xs-7 col-md-8 col-xs-offset-2 col-md-offset-1\">";
							echo "<div class=\"infosItems\">";
								echo "<h1>".$projet['nom']."</h1>";
								echo "<p> <span class=\"infosItem\"> Type :</span> ".$projet['type']."</p>";
								echo "<p> <span class=\"infosItem\"> Description :</span> ".$projet['description']."</p>";
								echo "<p> <span class=\"infosItem\"> Technologies utilisées :</span> ".$projet['technologies']."</p>";
								echo "<span class=\"infosItem\"> Liens d'accès au projet :</span> <a href=\"".$projet['lien']."\" target=\"_blank\"> ".$projet['lien']."</a>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
				$i++;
			}

			echo "<div id=\"projectsMenu\" class=\"col-xs-10 col-xs-offset-1\">";
				echo'<ul class="list-inline">';
				for ($j=1; $j < $i; $j++) { 
					echo "<li id=\"projectsMenuslide".$j."\">";
						echo "<a href=\"#Projects/slide".$j."\">";
							echo $projets[$j-1]['nom'];
						echo "</a>";
					echo "</li>";
				}
				echo'</ul>';
			echo "</div>";


			$reponse->closeCursor();
		?>  	
	</div>
</div>


