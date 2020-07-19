<?php
function create_table(){
    return "CREATE TABLE Employees(
        Employee_Id int(6) NOT NULL PRIMARY KEY,
        First_Name VARCHAR(20),
        Last_Name VARCHAR(25) NOT NULL,
        Email VARCHAR(25) NOT NULL,
        Phone_Number VARCHAR(15),
        Hire_Date DATE NOT NULL,
        Job_Id VARCHAR(10) NOT NULL,
        Salary int(8),
        Commision_pct int(2),
        Manager_Id int(6),
        Department_Id int(4))";
}
function create_db($database){
    return "CREATE DATABASE $database";
}

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'VS_CODE_TEST';

$link = mysqli_connect($servername,$username,$password);

if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}

if(mysqli_query($link,create_db($database))){
    echo "DB Created.\n";
    $link = mysqli_connect($servername,$username,$password,$database);
    if(mysqli_query($link,create_table())){
        echo "Table created.\n";        
    }
}
else{
    echo "Database already exists.\n";
    $link = mysqli_connect($servername,$username,$password,$database);
    if(mysqli_query($link,create_table())){
        echo "Table created";
    }
    else{
        echo "Table already exists.\n";
    }
}
mysqli_close($link);
?>