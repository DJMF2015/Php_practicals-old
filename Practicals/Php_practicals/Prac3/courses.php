<!-- courses.php	K. J. Turner, M. Kolberg	11/01/07 -->

<html>

<head>
  <title>Course Query</title>
</head>

<body>
  <form action="courses.php" method="post">
    Enter course code:
    <input type="text" name="course" />
    <input type="submit"/>
    </form>

  <?php
    }
    $output = NULL;
    require_once('MDB2.php');
	require_once('dbcredentials.php');

    $course = $_POST['course'];
    //print ($course);
    if (!empty($course)) {

      echo "<table border='1'>\n";
      echo "    <tr><th>Code</th><th>Name</th><th>Coordinator</th></tr>\n";
      $database = MDB2::factory("mysql://$dbUser:$dbPass@shark.cs.stir.ac.uk/$dbName");
      // ??? check for database error

      $query = "
        	SELECT courses.id,courses.name,staff.name
	        FROM courses,staff
	        WHERE courses.coordinator=staff.id AND courses.id = '$course' ";

           //print ($query);
      $result = $database->query($query);

      // ??? check for database error

      while ($rows = $result->fetchRow()) {
       echo "<tr>";
		// foreach row here to display in form elements related to 'course id' eg)ITNP070 , course name, coordinator...
	        foreach($rows as $value){

	   //  output contents of row elements 0, 1, 2 as
	  echo ("<td> $value </td>");


      }
      echo "</tr>";
}

      echo "</table>\n";
    }

?>


</body>

</html>