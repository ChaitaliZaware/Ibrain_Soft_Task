<?php
include 'index_page.php';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>


<style>


body {
  background: #C5E1A5;
}
form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #8BC34A;
  color: #ffffff;
}
</style>
<script>
$(document).ready(function(){

  $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
  });

});
</script>
</head>
<body>
<center>
<form action="" method="POST" enctype="multipart/form-data">
<h1>ADD FILE</h1>
  <label>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="file" name="csvfile" value="" required="required">

    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
 

   
  <button type="submit" name="upload">Add File</button>

</form>
<?php
error_reporting(0);
if(isset($_POST['upload']))
{
	$con=mysqli_connect("localhost","root","","IbrainTask");
	
	if($con)
	{ 
		$file=$_FILES['csvfile']['tmp_name']; 
		$handle=fopen($file,"r");      // read from file 
		if($_FILES['csvfile']['name'] == 'clinicinfo.csv')
		{
			
			$i=0;   //if you visit 1st time then create table and 2nd time directly insert data to that table
			while(($cont=fgetcsv($handle,1000,","))!==false)  //i.e. if true then execute execute and if no content to transfer then it return false
			{	$table=rtrim($_FILES['csvfile']['name'],".csv");
		
				if($i==0)
				{
				$clinicid=$cont[0];
				$clinicname=$cont[1];
				$city=$cont[2];
				$state=$cont[3];
				$query="CREATE TABLE $table($clinicid INT NOT NULL,$clinicname VARCHAR(200),$city VARCHAR(100),$state VARCHAR(100),PRIMARY KEY($clinicid))";
				
				mysqli_query($con,$query);
				}
				else
				{
				$query="INSERT INTO $table ($clinicid,$clinicname,$city,$state) VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]')";
				
				mysqli_query($con,$query);			
				}
			$i++;	
			}
		}
		else if($_FILES['csvfile']['name'] == 'appointmentinfo.csv')
		{
			
			$i=0;   //if you visit 1st time then create table and 2nd time directly insert data to that table
			while(($cont=fgetcsv($handle,1000,","))!==false)  //i.e. if true then execute execute and if no content to transfer then it return false
			{	$table=rtrim($_FILES['csvfile']['name'],".csv");
		
				if($i==0)
				{
				$patid=$cont[0];
				$apptid=$cont[1];
				$apptdate=$cont[2];
				$operatory=$cont[3];
				$provider=$cont[4];
				$appttime=$cont[5];
				$apptlength=$cont[6];
				$amount=$cont[7];
				$clinicid=$cont[8];
				$query="CREATE TABLE $table($patid INT,$apptid INT,$apptdate DATE,$operatory INT,$provider INT,$appttime varchar(50),$apptlength INT,$amount FLOAT,$clinicid INT,PRIMARY KEY($apptid))";
				//date("h:i")
		
				
				
				mysqli_query($con,$query);
				}
				else
				{
				$query="INSERT INTO $table ($patid,$apptid,$apptdate,$operatory,$provider,$appttime,$apptlength,$amount,$clinicid) VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]','$cont[6]','$cont[7]','$cont[8]')";
				
				mysqli_query($con,$query);			
				}
			$i++;	
			}
		}
		else if($_FILES['csvfile']['name'] == 'doctorinfo.csv')
		{
			
			$i=0;   //if you visit 1st time then create table and 2nd time directly insert data to that table
			while(($cont=fgetcsv($handle,1000,","))!==false)  //i.e. if true then execute execute and if no content to transfer then it return false
			{	$table=rtrim($_FILES['csvfile']['name'],".csv");
		
				if($i==0)
				{
				$IDNo=$cont[0];
				$lastname=$cont[1];
				$firstname=$cont[2];
				$city=$cont[3];
				$state=$cont[4];
				$clinicid=$cont[5];
				$query="CREATE TABLE $table($IDNo INT,$lastname varchar(100),$firstname varchar(100),$city varchar(100),$state varchar(100),$clinicid INT,PRIMARY KEY($IDNo))";
				//date("h:i")
		
				
				
				mysqli_query($con,$query);
				}
				else
				{
				$query="INSERT INTO $table ($IDNo,$lastname,$firstname,$city,$state,$clinicid) VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]')";
				
				mysqli_query($con,$query);			
				}
			$i++;	
			}
		}
		else if($_FILES['csvfile']['name'] == 'patientinfo.csv')
		{
			
			$i=0;   //if you visit 1st time then create table and 2nd time directly insert data to that table
			while(($cont=fgetcsv($handle,1000,","))!==false)  //i.e. if true then execute execute and if no content to transfer then it return false
			{	$table=rtrim($_FILES['csvfile']['name'],".csv");
		
				if($i==0)
				{
				$PatID=$cont[0];
				$practiceid=$cont[1];
				$lastname=$cont[2];
				$firstname=$cont[3];
				$city=$cont[4];
				$state=$cont[5];
				$gender=$cont[6];
				$patientagegroup=$cont[7];
				$birthdate=$cont[8];
				$age=$cont[9];
				$query="CREATE TABLE $table($PatID INT,$practiceid INT,$lastname varchar(100),$firstname varchar(100),$city varchar(100),$state varchar(50),$gender varchar(50),$patientagegroup varchar(100),$birthdate DATE,$age INT,PRIMARY KEY($PatID))";				
				//date("h:i")
		
				
				
				mysqli_query($con,$query);
				}
				else
				{
				$query="INSERT INTO $table ($PatID,$practiceid,$lastname,$firstname,$city,$state,$gender,$patientagegroup,$birthdate,$age) VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]','$cont[6]','$cont[7]','$cont[8]','$cont[9]')";
				
				mysqli_query($con,$query);			
				}
			$i++;	
			}
		}
		else if($_FILES['csvfile']['name'] == 'transactioninfo.csv')
		{
			
			$i=0;   //if you visit 1st time then create table and 2nd time directly insert data to that table
			while(($cont=fgetcsv($handle,1000,","))!==false)  //i.e. if true then execute execute and if no content to transfer then it return false
			{	$table=rtrim($_FILES['csvfile']['name'],".csv");
		
				if($i==0)
				{
				$transid=$cont[0];
				$patid=$cont[1];
				$proceduretype=$cont[2];
				$proceduredate=$cont[3];
				$prov=$cont[4];
				$amount=$cont[5];
				$clinicid=$cont[6];
				$query="CREATE TABLE $table($transid INT,$patid INT,$proceduretype varchar(100),$proceduredate DATE,$prov int,$amount float,$clinicid int,PRIMARY KEY($transid))";				
				//date("h:i")
		
				
				
				mysqli_query($con,$query);
				}
				else
				{
				$query="INSERT INTO $table ($transid,$patid,$proceduretype,$proceduredate,$prov,$amount,$clinicid) VALUES('$cont[0]','$cont[1]','$cont[2]','$cont[3]','$cont[4]','$cont[5]','$cont[6]')";
				
				mysqli_query($con,$query);			
				}
			$i++;	
			}
		}
		else{
		//echo "<h2>This file is not required ...</h2>";
		echo "<script>alert('This file is not required for this task...');window.location.href='InsertCSVFileToMysql.php';</script>";		
		}

	
	}
	else
	{
		//echo "connection failed";
		echo "<script>alert('connection failed');window.location.href='InsertCSVFileToMysql.php';</script>";
	}
}

?>
</center>
</body>
</html>







