<?php

   $connect= new mysqli('localhost', 'root', '', 'login');

   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo 'Job Posted Successfully';   
   }

   $job=$_POST['inputjob'];
   $description=$_POST['inputdescipt'];
   $req=$_POST['inputreq'];
   $startdate=$_POST['inputstart'];
   $type=$_POST['inputtype'];
   $salary=$_POST['inputsalary'];
   $school=$_POST['schooltype'];
   $postedon=$_POST['inputpostd'];
   $applyby=$_POST['inputapply'];
 
   $sql="INSERT INTO `CreateJob`(`jobname`, `description`, `requirements`, `startdate`, `type`, `stipend`, `school`, `postedon`, `applyby`) VALUES ('$job','$description','$req','$startdate','$type','$salary','school','$postedon','$applyby')";
   $result= $connect-> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create a Job | WSP</title>
    <meta name="description" content="Work Study Program of BMU Home" />
  <meta name="keywords" content="learn, earn, student, BMU, engineering, management" />
  <meta name="author" content="MZed" />
  <link rel="shortcut icon" href="images/bmulogo.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Dashboard</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome Admin<span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Profile</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Log Out</a></li>
        </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

        <div class="container" id="job-create">
        <h1 class="text-center">Job Description</h1>
        </div>
      
<?php
      $connect= new mysqli('localhost', 'root', '', 'login');

      $sql2="SELECT * FROM createjob where jobname='$job' ";
   $array= $connect-> query($sql2);
?>
    <style type="text/css">
      table,th,td{
        border: 1px solid black;
        padding: 5px;
      }
      table{
      border-spacing: 15px;
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
    ?> </table>
      
      <form> 
      <button class="btn btn-lg btn-primary" type="submit" value="Edit Job">Edit Job</button>
      </form>

    </div> <!-- /container -->

    <footer>
      <div class="foot container">
        <div class="row">
              <div class="col-md-6 left-fut">
                <p>&copy 2016 BMU Work Study Program | Designed by <a href="#">MZed</a> and <a href="#">Team</a></p>
              </div>
              <div class="col-md-6 right-fut">
                <p>All Rights Reserved</p>
              </div>
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>