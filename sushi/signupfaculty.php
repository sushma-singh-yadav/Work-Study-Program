<?php

   $connect= new mysqli('localhost', 'root', '', 'login');

   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo 'connect world';   
   }

   $name=$_POST['name'];
   $department=$_POST['department'];
   $post=$_POST['post'];
   $mailid=$_POST['mailid'];
   $contactno=$_POST['contactno'];
   $work=$_POST['work'];
 
   $sql= "INSERT INTO `employer`(`name`, `department`, `post`, `mail id`, `contactno`, `work`) VALUES ('$name','$department','$post','$mailid','$contactno','$work')";
   $result= $connect-> query($sql);

   header('Location: logs.php');
   ?>