<?php
include 'index_page.php';
?>
<html>
<head>

<title>Table with database</title>
<style>
table, th, td {
	padding: 25px;
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
table#t01 {
    width: 100%;    
    background-color: #f1f1c1;
}
/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{

background-size: cover;
background-repeat: no-repeat;
height: 50%;
font-family: 'Numans', sans-serif;
}
</style>

</head>
<body>
<br><br><br>
<table style="width:70%" align="center" id="t01">
<tr>
<th>PatID</th>
<th>practiceID</th>
<th>LastName</th>
<th>FirstName</th>
<th>City</th>
<th>State</th>
<th>Gender</th>
<th>PatientAgeGroup</th>
<th>Birthdate</th>
<th>Age</th>
</tr>
<?php
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect('localhost','root','','IbrainTask');
$q="select * from patientinfo,appointmentinfo where patientinfo.PatID=appointmentinfo.patid AND appointmentinfo.apptdate<CURRENT_DATE()";
$result=mysqli_query($conn,$q);
$num="$result->num_rows";
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		//$PatID INT,$practiceid INT,$lastname varchar(100),$firstname varchar(100),$city varchar(100),$state varchar(50),$gender varchar(50),$patientagegroup varchar(100),$birthdate DATE,$age
		
		echo "<tr><td>".$row['PatID']."</td><td>".$row['practiceid']."</td><td>".$row['lastname']."</td><td>".$row['firstname']."</td><td>".$row['city']."</td><td>".$row['state']."</td><td>".$row['gender']."</td><td>".$row['patientagegroup']."</td><td>".$row['birthdate']."</td><td>".$row['age']."</td></tr>";
	}
}
?>

   </table>
      <br>
   <br>
   </body>
   </html>