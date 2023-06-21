<html>
<body>

<?php 
//Data input from form
$fName = $_POST['first_name'];
$lName = $_POST['last_name'];
$email = $_POST['bgsuemail'];
$major = $_POST['major'];


if (!empty($_POST['reason'])) {
$reason = $_POST['reason'];}

if (empty($_POST['reason'])) {
$reason = "None Selected";}

$reasonother = $_POST['reason_other'];

if (!empty($_POST['job'])) {
$job = $_POST['job'];}

if (empty($_POST['job'])) {
$job = "None Selected";}

$company = $_POST['company'];
$jobtitle = $_POST['job_title'];
$city = $_POST['city'];
$state = $_POST['state'];

if (!empty($_POST['intern'])) {
$intern = $_POST['intern'];}
if (empty($_POST['intern'])) {
$intern = "None Selected";}

$secure = $_POST['secure'];
$salary = $_POST['salary'];
$bonus = $_POST['bonus'];
$phone = $_POST['phone'];
$nonbgsuemail = $_POST['nonbgsuemail'];

if (!empty($_POST['curplan1'])) {
$curplan1 = $_POST['curplan1'];}
if (empty($_POST['curplan1'])) {
$curplan1 = "None Selected";}

$interviewpend = $_POST['interviewpend'];

if (!empty($_POST['curplan2'])) {
$curplan2 = $_POST['curplan2'];}
if (empty($_POST['curplan2'])) {
$curplan2 = "None Selected";}

$gradschlname = $_POST['gradschlname'];

if (!empty($_POST['curplan3'])) {
$curplan3 = $_POST['curplan3'];}
if (empty($_POST['curplan3'])) {
$curplan3 = "None Selected";}

$otherplans = $_POST['otherplans'];

if (!empty($_POST['internship'])) {
$internship = $_POST['internship'];}
if (empty($_POST['internship'])) {
$internship = "None Selected";}

$company1 = $_POST['company1'];
$company2 = $_POST['company2'];
$company3 = $_POST['company3'];
$company4 = $_POST['company4'];
$company5 = $_POST['company5'];

$job_title1 = $_POST['job_title1'];
$job_title2 = $_POST['job_title2'];
$job_title3 = $_POST['job_title3'];
$job_title4 = $_POST['job_title4'];
$job_title5 = $_POST['job_title5'];

$city1 = $_POST['city1'];
$city2 = $_POST['city2'];
$city3 = $_POST['city3'];
$city4 = $_POST['city4'];
$city5 = $_POST['city5'];

$state1 = $_POST['state1'];
$state2 = $_POST['state2'];
$state3 = $_POST['state3'];
$state4 = $_POST['state4'];
$state5 = $_POST['state5'];

$wage1 = $_POST['wage1'];
$wage2 = $_POST['wage2'];
$wage3 = $_POST['wage3'];
$wage4 = $_POST['wage4'];
$wage5 = $_POST['wage5'];

if (!empty($_POST['bca'])) {
$bca = $_POST['bca'];}
if (empty($_POST['bca'])) {
$bca = "None Selected";}

if (!empty($_POST['rating'])) {
$rating = $_POST['rating'];}

if (empty($_POST['rating'])) {
$rating = "None Selected";}

$message = $_POST['message'];

//Validity check
$okay= true;
if (empty($_POST['first_name'])) {
	print '<p><font color = "red">Please enter your first name.</p>';
	$okay = false;
}

if (empty($_POST['last_name'])) {
	print '<p><font color = "red">Please enter your first name.</p>';
	$okay = false;
}
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $_POST['bgsuemail'])) 
	{print '<p><font color = "red">Please enter a valid email.</p>';
	$okay=false;}

if (($_POST['major']) == "") {
	print '<p><font color = "red">Please select your major.</p>';
	$okay = false;
}

//Writing to a DB

if($okay)
{
//Connection parameters

 $host = "localhost";
 $user = "root";
 $password = ""; //leave $password as an empty string when you do this in the BGSU lab
 $dbname = "bcadata";

//mysqli_connect opens a new connection to the MySQL server
                               
 $cxn = mysqli_connect($host,$user,$password,$dbname)	  
         or die ("couldn't connect to server");

//Preparing the SQL query for inserting a data record into Customer table and assigning it to a php variable

 $query = "INSERT INTO Gradsurvey VALUES ( '{$fName}', '{$lName}', '{$email}', '{$major}', '{$reason}', '{$reasonother}', '{$job}', '{$company}', '{$jobtitle}', '{$city}', 
'{$state}', '{$intern}', '{$secure}', '{$salary}', '{$bonus}', '{$phone}', '{$nonbgsuemail}', '{$curplan1}', '{$interviewpend}', '{$curplan2}', '{$gradschlname}', '{$curplan3}', '{$otherplans}', 
'{$internship}',  '{$company1}', '{$job_title1}', '{$city1}', '{$state1}', '{$wage1}', '{$company2}', '{$job_title2}', '{$city2}', '{$state2}', '{$wage2}', 
'{$company3}', '{$job_title3}', '{$city3}', '{$state3}', '{$wage3}', '{$company4}', '{$job_title4}', '{$city4}', '{$state4}', '{$wage4}', '{$company5}', '{$job_title5}', '{$city5}', '{$state5}', '{$wage5}', '{$bca}', '{$rating}', '{$message}')";

 $resultGrad = mysqli_query($cxn,$query)
		or die ("Couldn't execute query - there is already a customer record for $email. <a href=\"https://localhost/GradSurveyForm.php\"><br><br>Back to Form</a>" );
      

}



?>
<h1>Thank you!</h1> <br>

<a href="https://localhost/GradSurveyForm.php">Back to Form</a>

</body>
</html>