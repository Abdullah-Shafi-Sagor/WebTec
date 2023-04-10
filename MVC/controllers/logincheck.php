<?php
require_once('../models/dbmodel.php');

if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
    
    if($name=="" && $password=="")
    {
    	echo "Enter name & password";
    }
    else
    {
    	$status=auth($name,$password);
    	if($status)
    	{
          header('location:../views/edit.php');
    	}
    	else
    	{
          header('location:../views/login.php');
    	}

    }


}



?>