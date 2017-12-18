<?php
   $connect= new mysqli('localhost', 'root', '', 'login');
   if($connect->connect_error)
   {
       die('connection failed bruh');
       }else{
       echo 'connect world';   
   }

   $name=$_POST['name'];
   $username= $_POST['username'];
   $password=$_POST['password'];
   $type=$_POST['type'];

   $sql="INSERT INTO users(name, username, password,type) VALUES ('$name','$username','$password','$type')";
   $result= $connect-> query($sql); 
   
   if($type=='Student')
   {
   header('Location: signin.html');   }
   else 
   {   header('Location: signinfaculty.html');  }
   
   exit;
   ?>