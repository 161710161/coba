<?php

	require_once 'robot.php';
	$robot1 = new robot("ngek ngek",45);
	$robot1->set_suara("nguk nguk");
	$robot1->set_berat(40);
	echo "Suara robot ini adalah : ".$robot1->get_suara().'<br>';
	echo "Berat robot ini adalah : ".$robot1->get_berat(). ' kg';
?>