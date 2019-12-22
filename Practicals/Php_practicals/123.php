<html>
<body>
<head>


<?php
$prices = array("brand new computer" => 2000,
	             "2 months of lynda.com" => 30,
	              "Learning PHP"=> null);


 foreach ($prices as $item =>$price){
 	echo "$item: ", "\n";
 	echo "<br/>";
 	if (is_int($price)) {
 		echo "$" . $price;
 	} else {
 		echo "priceless";
	} 
 	echo "<br/> ";
 }
?>
</body>
</html>

   /* output: brand new computer: 
    
     $2000
     2 months of lynda.com: 
     $30
     Learning PHP: 
     priceless
     */ 


