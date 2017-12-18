<?php

   $connect= new mysqli('localhost', 'root', '', 'login');

   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo 'connect world';   
   }

   $name=$_POST['name2'];
   $email=$_POST['email2'];
   $subject=$_POST['subject'];
   $message=$_POST['message'];
  
   $sql="INSERT INTO `contactus`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
   $result= $connect-> query($sql);

   ?>