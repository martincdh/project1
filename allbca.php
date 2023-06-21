<html>
<head>
<title>Gradsurvey Form</title>
</head>
<body>

<h1> Gradsurvey- Administrator</h1>
<h2> Student info</h2>

<?php 

// Retrieves specific Graduate details

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "bcadata";                               
  
  $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");


  $query = "SELECT * FROM Gradsurvey";
   
  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");	 

//Printing DB table as a html table

 print "<table width='100%' border='1'>";
 print "<tr><th>Email</th><th>First Name</th><th>Last Name</th><th>Major</th><th>Salary</th>";

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


