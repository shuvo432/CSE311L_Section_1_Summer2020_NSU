<?php
$link = mysqli_connect('localhost','root','password');
if($link == false)
{
    die("Error: could not connect." .mysqli_connect_error());
}
$sql = "CREATE DATABASE VS_CODE_TEST";
if(mysqli_query($link,$sql)){
    echo"DB Created";
}
else{
    echo"Error:Could not create db" .mysqli_connect_error($link);
}
mysqli_close($link)
?>