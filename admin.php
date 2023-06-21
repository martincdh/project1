<html>
<head>
<title>BGSU Career Accelerator Admin Panel</title>
</head>
<body>

<h1>BGSU Career Accelerator - Administrator</h1>

<a href="https://localhost/allbca.php">ALL Survey Records</a><br><br>

<form action="singlebca.php" method="post">
Single Survey Record (Enter email of graduate): <input type="text" name="bgsuemail" size="30">
<input type="submit" value="Retrieve Survey Record">
</form>

<form action="majorbca.php" method="post">
Survey Records by Major (Select major): <select name="major">
	   <option value="Select">Select</option>
           <option value="accounting">Accounting</option>
           <option value="applied_econ">Applied Economics</option>
           <option value="BI_analytics">Business Analytics & Intelligence</option>
           <option value="economics">Economics</option>
           <option value="finance">Finance</option>
           <option value="indiv_bus">Individualized Business</option>
           <option value="IS">Information Systems</option>
           <option value="ISAC">Information Systems Auditing & Control</option>
           <option value="insurance">Insurance Risk Management</option>
           <option value="international_bus">International Business</option>
           <option value="management">Management</option>
           <option value="marketing">Marketing</option>
           <option value="sales">Sales & Services Marketing</option>
           <option value="supply_chain">Supply Chain Management</option>
           </select>
<input type="submit" value="Retrieve Survey Record">
</form>

<form action="salarybca.php" method="post">
Survey Records by Salary (Enter salary threshold): $ <input type="text" name="salary" size="20">
<input type="submit" value="Retrieve Survey Record">
</form>



</body>
</html>