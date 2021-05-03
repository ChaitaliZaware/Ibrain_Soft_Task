<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;   background: #C5E1A5;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 5px;
  color: white;
  text-decoration: none;
  font-size: 14px;
  width: 20%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
 


  
}
</style>
<body>

<br>

<div class="navbar">
  <a class="#" href="#"><i></i></a> 
  <a class="#" href="#"><i></i></a>
  <a class="active" href="InsertCSVFileToMysql.php" ><i></i> Insert CSV File To Mysql</a> 
  <a class="#" href="#"><i></i></a>
  <a class="#" href="#"><i></i></a>
</div>

<div class="navbar">
  <a class="#" href="task1.php" id="demo1" title="#1 Show number of appointments by a clinic, by year, by month "><i></i>Task_1</a> 
  <a class="active" href="task2.php" id="demo2" title="#2 Show a list of patients with patient details who do not have appointments in the future. "><i></i> Task_2</a> 
  <a class="#" href="task3.php" id="demo3" title="#3 Calculate the age of the patient from birthdate and update it into the table. Update patientagegroup 
column based on a following condition - if age is less than 18 then Minor and other Adult."><i></i> Task_3</a> 
    <a class="active" href="task4.php" id="demo4" title="Display on UI in tabular format. Total production, Payments, Production Adjustments, Collection 
Adjustments by clinic name by Provider name by year by month."><i></i> Task_4</a> 
  <a class="#" href="task5.php" id="demo5" title="#5 Add functionality to delete appointment having amount less than 50"><i></i>Task_5</a>
</div>
</body>
</html> 

