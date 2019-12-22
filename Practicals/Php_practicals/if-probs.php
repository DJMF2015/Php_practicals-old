<html>
	<head>
		<title>Common Pitfalls in IF statements.</title>
	</head>

	<body>
<?php

$aVar = "999" ;
if ($aVar == 46) {
    echo "The meaning of life etc\n"; }
  elseif ($aVar == 999) {
    echo "What service do you require?\n"; }
  else {
    echo "The variable's value is ";
    echo $aVar; }
  ?>
	</body>
</html>