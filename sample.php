<?php
$servername="localhost"; //if we want to change the database from phpmyadmin to mysql workbench use "localhost:3307" as the server name because mysql work bench is running on port 3307 in this machine
$username ="root";
$password ="";
$database="devaraju";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Failed to connect:".mysqli_connect_error());
}




if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST["username"];
    $password=$_POST["password"];
$sql="insert into `login1`(`username`,`password`) values ('$username','$password')";
$result=mysqli_query($conn,$sql);
if($result){
    echo "logged in succesfully";
}
else{
    echo "error logginging into account";
}
}
?>