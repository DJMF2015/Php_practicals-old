<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<h3>Output!</h3>

<table border="3" bgcolor="#FF0	">

<tr><th>Numbers</th><th>Doubles</th></tr><tr>

<?php
   $count = 0;
   for ($i=0; $i<10; $i++) {
      echo '<tr>';
      $count = $i *2;
      echo  " <td>$i</td> <td>$count</td>\n"; 
      echo '</tr>'; 
   }  // outputs: numbers and their doubles in a table
?>	
</table>
</body>
</html>
