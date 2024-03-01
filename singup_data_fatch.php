<?php
include "connection.php";

if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    echo $email;
    echo $password;
    $query= "INSERT INTO login(Email, Password) VALUES ('$email','$password')";
    $result=mysqli_query($connect,$query);
    if($result)
    {
        echo "data inserted";
    }
    else{
        echo "data not inserted";
    }
}

?>