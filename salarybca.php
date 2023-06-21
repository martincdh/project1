<html>
<head>
<title>Assignment 3 Salary BCA</title>
</head>
<body>

<h1> Grad Survey Form </h1>


<?php 

// Retrieves records by the input custom salary 

if (!empty($_POST['salary'])) {
 $CustomSalary = $_POST['salary'];
}

if (empty($_POST['salary'])) {
 $CustomSalary = "None Selected";
}

 $host = "localhost";
 $user = "root";
 $password = ""; // blank password at the moment
 $dbname = "bcadata";                               
  
  $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");

  $query = "SELECT * FROM Gradsurvey WHERE salary > '$CustomSalary'";	  
  $result = mysqli_query($cxn,$query)
            or die ("Couldn't execute query.");

// Printing output from database as an html table        

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