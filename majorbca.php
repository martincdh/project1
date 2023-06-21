<html>
<head>
<title>Graduate Survey</title>
</head>
<body>

<h1> Graduate Survey - Data </h1>
<h2> Retrieves records based on major </h2>

<?php 

// Retrieves records by the input major

  $major = $_POST['major'];

 $host = "localhost";
 $user = "root";
 $password = ""; //Insert password when obtained
 $dbname = "bcadata";                               
  
 $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");


 $query = "SELECT * FROM Gradsurvey WHERE Major = '$major'";	  	  
 $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");	 

//Printing DB table as a html table

 print "<table width='100%' border='1'>";
 print "<tr><th>Email ID</th><th>First Name</th><th>Last Name</th><th>Major</th><th>Annual Salary</th></tr>";

 while($row = mysqli_fetch_assoc($result))           
 {
 
//Display one record for each iteration of the loop
   print "<tr><td>{$row['BGSUemail']}</td><td>{$row['FirstName']}</td><td>{$row['LastName']}</td><td>{$row['Major']}</td><td>{$row['Salary']}</td></tr>";
 }

 print "</table>";

?>

<br><br>

<a href="https://localhost/admin.php">Back to Admin Form</a>

</body>
</html>