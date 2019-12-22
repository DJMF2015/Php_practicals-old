<html>
<head><title>Pick a Beatle</title></head>
<body>
 <form action ="tut5.php" method="get">
Pick a Beatle
<select name="pick">
<option selected>All</option>
<option>Lennon</option>
<option>McCartney</option>
<option>Harrison</option>
<option>Starr</option>
</select>
<input type="submit"/>
 </form>
<html>
<head><title>Pick a Beatle</title></head>
<body>

  <?php
  //ascoaitive array
    $beatles = array('Lennon' => array('John', 'rhythm'),
    								 'McCartney' => array('Paul', 'bass'),
    								 'Harrison' => array('George', 'lead'),
    								 'Starr' => array('Ringo', 'drums'));


		$choice = $_GET['pick'];
		echo "You chose $choice<br/><br/>";


		if($choice === "All") {
			foreach($beatles as $key => $value){
				echo "$value[0]'s surname was \"$key\" and he played $value[1].<br/>";
			  
			}
			echo "<br />";
		}
		else {
			echo "{$beatles[$choice][0]}'s surname was \"$choice\" and he played {$beatles[$choice][1]}.<br/><br/>";
		}       //output : john's surname was lennon and he played rhythm
  ?>

</body>
</html>