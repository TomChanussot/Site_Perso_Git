<?php
	$fichier = 'resources/pdf/Tom CHANUSSOT CV.pdf'; 
	$filename = 'Tom CHANUSSOT CV.pdf';
	$fichier_taille = filesize($fichier);
	header("Content-disposition: attachment; filename=$filename");
	header("Content-Type: application/force-download");
	header("Content-Transfer-Encoding: application/octet-stream");
	header("Content-Length: $fichier_taille");
	header("Pragma: no-cache");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0, public");
	header("Expires: 0");
	readfile($fichier);
?>