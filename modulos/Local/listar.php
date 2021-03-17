<?php
	$local = array();

	$local[] = array(rua => "josé serafim", ncasa => 310);

	$local[] = array(rua => "general osório", ncasa => 517);

	$local[] = array(rua => "hamilton silva", ncasa => 230);

	$local[] = array(rua => "beira rio", ncasa => 912);

	$local[] = array(rua => "candido mendes", ncasa => 752);

	foreach($local[0] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($local[1] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($local[2] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($local[3] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
	foreach($local[4] as $data => $data2){
		echo "$data = $data2 \n";
	}
	echo "<br />";
?>