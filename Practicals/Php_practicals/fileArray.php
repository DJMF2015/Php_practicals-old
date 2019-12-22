<html>
<head><title>Polite Hello World!</title></head>
<body>
  <?php


$a = file("offices.txt");

function print_array($print) {

  foreach( $print as $row){
print("$row<br>" );
}
}

function print_email($print){

foreach ($print as $row){
$list = explode("\t",$row);
echo "$list[2]<br>";
}
}
function check_emalis($email){
foreach ($email as $element){
if (preg_match("/[a-zA-Z]{3}@cs.stir.ac.uk/" ,$element))
print("Element:$element ok<br/>\n"  );
}
}


check_emalis($a);
//print_array($a);

?>

</body>
</html>