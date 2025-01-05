<?php 

if(isset($_POST["login"]))
{

    $name=$_POST["emailOrName"];
    $password=$_POST["password"];
   echo "$name, $password";
    
}