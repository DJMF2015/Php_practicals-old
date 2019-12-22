<html>
<head>
<title>The Beatles</title>
</head>

<body>
<h1>The Fab Four</h1>

  <table border="4" >
    <tr>  <td>

<?php
  $names = array ('John'=>'Lennon','Paul'=>'McCartney','George'=>'Harrison','Ringo'=>'Starr');
  $roles = array('John' => 'rhythm', 'Paul' => 'bass', 'George' => 'lead', 'Ringo' => 'drums');
  $firstnames = array_keys($names);
 ?>

<!-- Question 4b (two alternatives) -->
 

<?php
			
    foreach($firstnames as $value){
    	echo "$value played \"$roles[$value]\"<br/>";
	}  //John's surname was Lennon, Ringos suranme was...
?> 
 <tr/> <td/>
  </table>
</body>
</html>