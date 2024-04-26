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
$comment = $_POST['comment'];

$sql =" INSERT INTO `comment`(`name`, `email`, `comment`) VALUES ('$name','$email','$comment')";

$result = mysqli_query($con,$sql);

if($result){
    echo "Data submitted";
}
else{
    echo "Error";
}


?>