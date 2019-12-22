<html>
<body>

<form action="calc.php" method="post" name='myform'>
  <table>
  <table border="1" >
    <tr>
      <td>
        <input type="text" name="numb1" onBlur="var a=document.forms.myform.numb1.value; if(isNaN(a)) alert(a+' is not a number');">
      </td>     


    <td>
      <input type="radio" name="op" value="plus"> +<br>
      <input type="radio" name="op" value="minus"> -<br>
      <input type="radio" name="op" value="times"> x<br>
      <input type="radio" name="op" value="by"> /<br>
    </td>
    
    <td>
      <input type="text" name="numb2" onBlur="var a=document.forms.myform.numb2.value; if(isNaN(a)) alert(a+' is not a number');">
    </td>
    </tr>
  </table>
    <input type="hidden" name="submitted" value="TRUE">
  <button type="submit">Submit</button>
  </table>
</form>

<?php

        
    	//cast all vars to spec type
    	$numb1 = isset($_POST["numb1"]) ? (int) $_POST["numb1"] : 0;
    	$numb2 = isset($_POST["numb2"]) ? (int) $_POST["numb2"] : 0;
    	$calc  = isset($_POST["op"]) ? $_POST["op"] : null;
    
        if ($calc) {
          	//switch between operator value
          	switch($calc) {
              case "plus":
                  $result = $numb1 + $numb2;
                  break;
              case "minus":
                  $result = $numb1 - $numb2;
                  break;
              case "times": 
                  $result = $numb1 * $numb2; 
                  break;
              case "by": 
                  $result = $numb1 / $numb2;
                  break;              
              case "op": 
                  $calc = "Please select an operator";
            } 
            
         //  if(empty($numb1 && $numb2)) {
               
            //echo "please enter a number";
          //  }
            echo  "<p><b>Calculation result: $result</b></p>";
        }
 ?>
</body>
</html>

