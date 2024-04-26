<?php

$sever = "localhost";

$username = "root";

$password = "9545265877";

$dbname = "Yash";

$con = mysqli_connect($sever, $username, $password, $dbname);

if(!$con)

{
    echo " not connected";
}



//start
$name  = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql =" INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";

$result = mysqli_query($con,$sql);

if($result){
    echo "Data submitted";
}
else{
    echo "Error";
}


?>