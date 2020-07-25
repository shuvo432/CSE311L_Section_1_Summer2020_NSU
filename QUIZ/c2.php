<?php

$link = mysqli_connect('localhost','root','password');
mysqli_select_db($link, 'VS_CODE_TEST');
if($link == false)
{
    die("Error:Could not connect." .mysqli_connect_error());
}
    $sql = "CREATE TABLE test_table(
        job_id  VARCHAR(10) NOT NULL,
        job_title  VARCHAR(35) NOT NULL,
        min_salary NUMBER(6),
        max_salary NUMBER(6)
        )";
        if(mysqli_query($link,$sql)){
        
            echo "table created";
        }
        else{
            echo "ERROR:COULD not create table" .mysqli_error($link);
        }
        mysqli_close($link)
        ?>
