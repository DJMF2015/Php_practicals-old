<html>
<head><title>A form with two fields</title></head>
<body>
  <?php
		function joined($s1,$s2) {
			return  array($s1.$s2, strlen($s1.$s2));
		}

		function addup($n1,$n2) {
			return $n1+$n2;
		}

    if(!array_key_exists('fieldOne', $_GET) or !array_key_exists('fieldTwo', $_GET))
		echo "Please enter something in both fields";
	  else {
		$first = $_GET['fieldOne'];
		$second = $_GET['fieldTwo'];

		if($first=='' or $second=='') echo "Please enter something in both fields";

		else if((int)$first and (int) $second) {
			$answer = addup($first,$second);
			echo "The sum of the two numbers is $answer.";
		}t
		else if((int)$first or (int)$second) {
			echo "ERROR: Cannot mix numbers and strings";
			echo "ERROR: Cannot mix numbers and strings";
		}
		else {
			$answer = joined($first, $second);
			echo "The concatenated string is \"$answer[0]\" and its length is $answer[1]";
			}
	 }
	?>

  <form action ="tut2.php" method="get">
		Field 1: <input type="text" name="fieldOne" />
		Field 2: <input type="text" name="fieldTwo" />
		<input type="submit"/>
  </form>
</body>
</html>