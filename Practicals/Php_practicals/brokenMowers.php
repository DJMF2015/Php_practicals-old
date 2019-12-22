<html>
	<head>
		<title>Campfire song, very jolly</title>
	</head>

	<body>
<?php

# some variable names have been replaced by ***

$ordinals = array("one", "two", "three", "four",
                  "five", "six", "seven", "eight",
                  "nine", "ten");

for ($verse = 0 ; $verse < 10 ; $verse++) {
  echo "$ordinals[$verse] " ;
  if ($verse == 0) {
    echo "one man and his dog, went to mow a meadow" ;
  }
  else {
    echo "$ordinals[$two]"  ;
  }
  print "went to mow, went to mow a meadow <br/>" ;
  for ($mower = 10 ; $mower > 0; $mower--) {
    echo "$ordinals[$verse] men, " ;
  }
  if ($verse !=0) {
    echo "\n<br/>" ;
  }
  echo "one man and his dog went to mow a meadow\n\n<br/><br/>" ;
}
?>
</body>
</html>