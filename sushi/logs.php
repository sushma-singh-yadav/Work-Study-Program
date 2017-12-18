<?php

   $connect= new mysqli('localhost', 'root', '', 'login');

   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo '';   
   }
   $username= $_POST['username'];
   $password=$_POST['password'];

   $sql=" SELECT name FROM users WHERE username='$username' AND password='$password'";
   $result= $connect-> query($sql);

?>
 <!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Work Study Program | BMU</title>
  <meta name="description" content="Work Study Program of BMU Home" />
  <meta name="keywords" content="learn, earn, student, BMU, engineering, management" />
  <meta name="author" content="MZed" />
  <link rel="shortcut icon" href="images/bmulogo.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Anton|Kaushan+Script|Lato|Roboto" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/customstyle.css" />
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="50">

<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BMU Work Study Program</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">About</a></li>
            <li><a href="index.html">Category</a></li>
            <li><a href="index.html">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li >
              <a href="signin.html" >Sign Out<span></span></a>
             
            </form>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div></li>
    </nav>

    
<style type="text/css">
  div1{
    float: left;
    padding-left: 100px;
    padding-bottom: 10px; 
  }
  div2{
  float: right;
  padding-top: 10px;
  padding-right: 100px;
  padding-left: 100px;
  padding-bottom: 30px;
  }
</style>

<div1>
         
        <h1> Welcome <br><br> </h1>
 <!--   <?php
       if($result->num_rows>0) 
   {
  while($row=$result->fetch_assoc())
  {
   echo " Welcome " .$row["name"] ;
    }
   }
   ?></h1> -->

<form  method="post" action="createjob.html">
<button name="Create job" value="Create a Job">Create a Job </button>
</form>
</div>
</div1>

<div2>
<h1> Jobs Posted </h1>
<?php
      $connect= new mysqli('localhost', 'root', '', 'login');

   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo '';   
   }


      $sql2="SELECT * FROM createjob ";
   $array= $connect-> query($sql2);
?>

    <style type="text/css">
      table,th,td{
        border: 1px solid black;
        padding: 5px;
      }
      table{
      border-spacing: 15px;
      column-width: 100px;
      }
    </style>
  <table border="2" >
   <tr>
      <th>Job</th>
      <th>Description</th>
      <th>Requirements </th>
      <th>Start Date </th>
      <th>Type</th>
      <th>Stipend</th>
      <th>School </th>
      <th>PostedOn </th>
      <th>applyby </th>
    </tr> 
<?php
       if ($array->num_rows > 0) {
    // output data of each row
        while($row=$array->fetch_assoc())
      {  
        print "<tr> <td>";
        echo  $row["jobname"];
        print "</td> <td>";
        echo  $row["description"];
        print "</td> <td>";
        echo $row["requirements"];
        print "</td> <td>";
        echo $row["startdate"];
        print "</td> <td>";
        echo $row["type"];
        print "</td> <td>";
        echo $row["stipend"];
        print "</td> <td>";
        echo $row["school"];
        print "</td> <td>";
        echo $row["postedon"];
        print "</td> <td>";
        echo $row["applyby"];
        print "</td> </tr>";

    }}
    else {
    echo "0 results";
    }
    ?> </table></div2>

  </body></html>
