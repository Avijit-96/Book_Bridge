<?php
$host="localhost:3307";
$username="root";
$password="";
$database="bookbridge";
$connect=mysqli_connect($host,$username,$password,$database);
if($connect)
{
    echo "connect";
}
else{
    echo "not connect";
}
?>