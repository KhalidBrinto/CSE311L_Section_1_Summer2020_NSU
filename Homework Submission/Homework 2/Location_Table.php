<?php
function create_table(){
    return "CREATE TABLE Locations(
        Location_Id int(4) NOT NULL PRIMARY KEY,
        Street_Address VARCHAR(40),
        Postal_Code VARCHAR(12),
        City VARCHAR(30) NOT NULL,
        State_Province VARCHAR(25),
        Country_Id VARCHAR(2))";
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