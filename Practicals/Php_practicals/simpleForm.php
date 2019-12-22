<html>
<head><title>Polite Hello World!</title></head>
<body>
  <?php
  	if(!empty($_GET['student'])&& ($_GET['person'])) {
		echo "Hello, {$_GET['student']}, and welcome.";
		echo "What would you like to ask? {$_GET['person']}.";
	}
    else {
    	echo "Please enter data in form!";
    }
   ?>

  <form action ="simpleForm.php" method="get">
		Enter your name: <input type="text" name="student" />
						<input type="text" name="person" />

		<input type="submit"/>
  </form>
</body>
</html>