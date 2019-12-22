<html>
	<head>
		<title>IF statements in PHP.</title>
	</head>

	<body>
<?php

$aVar = 999;

if ($aVar == 46) {
    echo "The meaning of life etc\n"; }
  elseif ($aVar == 999) {
    echo "If statements may be interrupted\n"; ?>

    by some general HTML output

<?php echo "and after the conditional statements can be continued\n";
    }
  else {
    echo "The variable's value is ";
    echo $aVar;
  }
  ?>
	</body>
</html>