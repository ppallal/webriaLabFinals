<?php
/* {"rado":900,"wilson":50,"yonex":942,"rolex":556} */
	extract($_GET);
	if(!isset($id)) die("Sorry Not Able To Do");
	$jdata = file_get_contents("db.json");
	$data = json_decode($jdata,true);
	$data[$id]--;
	print_r($data);
	$f = fopen("db.json","w");
	fwrite($f,json_encode($data));
	echo "successful";
?>