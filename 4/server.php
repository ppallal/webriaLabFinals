<script>
<?php
	extract($_GET);
	/* Creating HardCoded DataBase */
	$db = array();
	$db['1PI11CS116'] = array();
	$db['1PI11CS116']['name'] = "Pallal";
	$db['1PI11CS116']['gpa'] = 10;
	$db['1PI11CS116']['dept'] = "CSE";
	$db['1PI11CS122'] = array();
	$db['1PI11CS122']['name'] = "Chukka";
	$db['1PI11CS122']['gpa'] = 8;
	$db['1PI11CS122']['dept'] = "CSE";
	$db['1PI11CS110']['name'] = "Niru Bhai";
	$db['1PI11CS110']['gpa'] = 9;
	$db['1PI11CS110']['dept'] = "GNDU";
	
	/* Querying */
	$gpa = $db[$usn]['gpa'];
	$name = $db[$usn]['name'];
	$dept = $db[$usn]['dept'];
	
	/* Sending Data and Telling Client to display */
	echo "data={};";
	echo "data.gpa=$gpa;";
	echo "data.name='$name';";
	echo "data.dept='$dept';";
	echo "parent.$handler(data)"
?>
</script>