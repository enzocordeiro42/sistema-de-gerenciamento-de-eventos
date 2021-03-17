<?php
	$equipe = array();

	$equipe[] = array(nome => "marcelo", trabalho => "gerenciamento");

	$equipe[] = array(nome => "helena", trabalho => "iluminação");

	$equipe[] = array(nome => "renata", trabalho => "publicidade");

	$equipe[] = array(nome => "carlos", trabalho => "alto-falantes");

	$equipe[] = array(nome => "fabio", trabalho => "patrocinios");

	foreach($equipe[0] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipe[1] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipe[2] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipe[3] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipe[4] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
?>