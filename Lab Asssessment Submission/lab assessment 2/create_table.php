<?php

$link = mysqli_connect('localhost','root','password');
mysqli_select_db($link, 'VS_CODE_TEST');
if($link == false)
{
    die("Error:Could not connect." .mysqli_connect_error());
}
    $sql = "CREATE TABLE test_table(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_ar DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        if(mysqli_query($link,$sql)){
        
            echo "table created";
        }
        else{
            echo "ERROR:COULD not create table" .mysqli_error($link);
        }
        mysqli_close($link)
        ?>
