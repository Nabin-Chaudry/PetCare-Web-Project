<?php

$db=new PDO('mysql:host=localhost;dbname=clncdb','root', '');

if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];
$msg=$_POST['msg'];


$s=$db->prepare("INSERT INTO contact(fname,email,msg) VALUES (:fname,:email,:msg)");
$s->bindvalue('fname',$fname);
$s->bindvalue('email',$email);
$s->bindvalue('msg',$msg);
if($s->execute())
{
	header("refresh:1.1; url=./index.php");
   echo"<script>alert('Thank you for contacting.')</script>";
}
else
{
  echo"<script>alert('Failed')</script>";
  
}
}

?>