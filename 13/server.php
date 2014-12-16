<?php
	extract($_GET);
	
	$failMessage='{"status":501,"error":"sorry something went wrong","data":{}}';
	if(!isset($req))
	{
		die($failMessage);
	}
	
	if($req == "Create")
	{
		echo "Created";
	}
	else if($req == "update")
	{
		echo "udpad";
	}
	else if($req == "read")
	{
		echo "reagin";
	}
	else{
		die($failMessage);
	}
?>