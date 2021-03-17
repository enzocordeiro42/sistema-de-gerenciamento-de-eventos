<?php
	$eventos = array();

	$eventos[] = array(evento => "aniversario", data => "18 de julho de 2002");

	$eventos[] = array(evento => "show de musica", data => "5 de julho de 2021");

	$eventos[] = array(evento => "stand-up", data => "1 de abril de 2022");

	$eventos[] = array(evento => "feira", data => "25 de novembro de 2023");

	$eventos[] = array(evento => "festa de churrasco", data => "31 de maio de 2030");

	foreach($eventos[0] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($eventos[1] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($eventos[2] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($eventos[3] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($eventos[4] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
?>