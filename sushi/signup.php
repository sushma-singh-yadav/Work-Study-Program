<?php

   $connect= new mysqli('localhost', 'root', '', 'login');

   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo 'connect world';   
   }

   $name=$_POST['name'];
   $id=$_POST['inputid'];
   $stream=$_POST['inputstream'];
   $batch=$_POST['inputbatch'];
   $cgpa=$_POST['inputcgpa'];
   $scholarship=$_POST['inputscholarship'];
   $school=$_POST['inputschool'];
   $interest=$_POST['inputinterest'];
   $experience=$_POST['inputexperience'];
   $contactno=$_POST['inputcontactno']
   $sql="INSERT INTO `employee`(`name`,`studentid`,`stream`, `batch`, `CGPA`, `scholarship`,`school`,`interest`, `experience`,'contactno') VALUES ('$name','$id','$stream','$batch','$cgpa','$scholarship','$school','$interest','$experience','$contactno')";
   $result= $connect-> query($sql);

   $sql=" SELECT name FROM users WHERE name='$name'";
   $result= $connect-> query($sql);


   if($result->num_rows>0) 
   {
  while($row=$result->fetch_assoc())
  {
   echo " Welcome " .$row["name"] ;
    }
   }
   
   ?>