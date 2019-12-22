<html>
<head><title>Polite Hello World!</title></head>
<body>
  <?php


$a = file("offices.txt");

function sort_array($a) {
  for($i=0;$i <4;$i++  ) {  //think about why this cannot be a foreach loop!

  	$list =explode("\t" ,$a[$i]);      // create an array from the current element using the explode() function

  $newstring =$list[0]."\t".$list[1]."\t".$list[2];   // put array element back together with the name coming first


$newarray[]=$newstring;
  }
  natcasesort($newarray);//ascending order


  return $newarray;
}


$a = sort_array($a);
print_r($a);

//print out the sorted array using a foreach loop


  ?>


</body>
</html>