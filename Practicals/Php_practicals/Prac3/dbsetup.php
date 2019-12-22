<html>
	<head>
		<title>MySQL Initialisation.</title>
	</head>

	<body>
		<?php

	require_once('MDB2.php');
	require_once('dbcredentials.php');

    $db = MDB2::factory("mysql://$dbUser:$dbPass@shark.cs.stir.ac.uk/$dbName");
	if(PEAR::iserror($db)){
	    echo "error while connecting to DB ";
		die($db->getMessage);
	}

	$a = file("dbinitial.sql");

	for($i=0;$i<count($a);$i++) {
	$a[$i] = str_replace('\\','',$a[$i]);
		echo $a[$i] . "<br/>\n ";
		$q = $db->query($a[$i]);
		if(PEAR::iserror($q)) {
	        echo "error while issueing query ";
			die($q->getMessage());
		}
	}

echo "setup completed";


	?>
	</body>
</html>