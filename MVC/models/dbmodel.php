<?php
require_once('db.php');

function auth($name,$password)
{
  $conn=getConnection(); 
  $sql="select * from ab where Name='{$name}' and password='{$password}'";
  $result=mysqli_query($conn,$sql);
  $cout=mysqli_num_rows($result);
  if($cout==1)
  {
   return true;
  }
  else
  {
   return false;
  }
}


function allUser()
{
   $sql ="Select * from ab";
   return $sql;

}
function User()
{
   $sql ="Select * from ab where Id='2'";
   return $sql;

}
?>