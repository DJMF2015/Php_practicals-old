<html>
	<head>
		<title>The first PHP Example</title>
	</head>

	<body>
       <?php
        $givenName = array("David", "Fulton", "I am", "110");
        foreach($givenName as $value){
        echo "$value. ";
        }
     	?>
	</body>
</html>