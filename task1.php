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
<th>Number Of Appointments</th>
<th>Year</th>
<th>Month</th>
</tr>
<?php
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect('localhost','root','','IbrainTask');
$q="select COUNT(*) AS C,YEAR(apptdate) AS Y,MONTH(apptdate) AS M from appointmentinfo group by YEAR(apptdate),MONTH(apptdate)";
$result=mysqli_query($conn,$q);
$num="$result->num_rows";
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		
		
		echo "<tr><td>".$row['C']."</td><td>".$row['Y']."</td><td>".$row['M']."</td></tr>";
	}
}
?>

   </table>
      <br>
   <br>
   </body>
   </html>