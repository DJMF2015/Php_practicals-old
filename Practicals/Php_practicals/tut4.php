<html>
<head>
<title>The Beatles</title>
</head>

<body>
<h1>The Fab Four</h1>

<?php
  $names = array ('John'=>'Lennon','Paul'=>'McCartney','George'=>'Harrison','Ringo'=>'Starr');
  $roles = array('John' => 'rhythm', 'Paul' => 'bass', 'George' => 'lead', 'Ringo' => 'drums');
  $firstnames = array_keys($names);
 ?>

<!-- Question 4b (two alternatives) -->

<p>
<?php
	foreach($firstnames as $value){
		echo "$value's surname was \"$names[$value]\"<br/>";
	}
?>
</p>

</body>
</html>