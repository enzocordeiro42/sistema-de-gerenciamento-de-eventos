<?php
	$calendario = array();

	$calendario[] = array(dia => 27, mes => "fevereiro", ano => 2021);

	$calendario[] = array(dia => 18, mes => "julho", ano => 2002);

	$calendario[] = array(dia => 5, mes => "outubro", ano => 2077);

	$calendario[] = array(dia => 31, mes => "março", ano => 1980);

	$calendario[] = array(dia => 25, mes => "dezembro", ano => 2020);

	foreach($calendario[0] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($calendario[1] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($calendario[2] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($calendario[3] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($calendario[4] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
?>
