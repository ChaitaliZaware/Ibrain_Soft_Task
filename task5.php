

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
<th>Sr. No.</th>
<th>patid</th>
<th>apptid</th>
<th>apptdate</th>
<th>operatory</th>
<th>provider</th>
<th>appttime</th>
<th>apptlength</th>
<th>amount</th>
</tr>
<?php
error_reporting(E_PARSE | E_ERROR);
$conn=mysqli_connect('localhost','root','','IbrainTask');
$q1="delete from appointmentinfo WHERE amount<50";
mysqli_query($conn,$q1);
echo "<script>alert('Information Deleted Successfully ...');</script>";
$q="select * from appointmentinfo";
$result=mysqli_query($conn,$q);
$num="$result->num_rows";
$count=0;
if($result->num_rows > 0)
{
	while($row=$result->fetch_assoc())
	{
		$count++;
		//$PatID INT,$practiceid INT,$lastname varchar(100),$firstname varchar(100),$city varchar(100),$state varchar(50),$gender varchar(50),$patientagegroup varchar(100),$birthdate DATE,$age
		
		echo "<tr><td>".$count."</td><td>".$row['patid']."</td><td>".$row['apptid']."</td><td>".$row['apptdate']."</td><td>".$row['operatory']."</td><td>".$row['provider']."</td><td>".$row['appttime']."</td><td>".$row['apptlength']."</td><td>".$row['amount']."</td></tr>";
	}
}
?>

   </table>
      <br>
   <br>
   </body>
   </html>