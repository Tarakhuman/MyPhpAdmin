<?php

$con=mysqli_connect("mysql","root","password");
$kk=mysqli_select_db($con,"llc")
if($kk)
{
 echo "connected sucessfully";
 
}
else
{
echo "fail to connect";
}
?>