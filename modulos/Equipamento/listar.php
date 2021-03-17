<?php
	$equipamento = array();

	$equipamento[] = array(nome => "luz de palco", preço => 350);

	$equipamento[] = array(nome => "fritadeira eletrica", preço => 550);

	$equipamento[] = array(nome => "aparelho de som", preço => 250);

	$equipamento[] = array(nome => "maquina de fumaça", preço => 210);

	$equipamento[] = array(nome => "bola de espelhos", preço => 160);

	foreach($equipamento[0] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipamento[1] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipamento[2] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipamento[3] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($equipamento[4] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
?>