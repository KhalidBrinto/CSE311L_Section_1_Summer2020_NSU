<?php
function create_table(){
    return "CREATE TABLE Departments(
            Departmnet_id INT(8) PRIMARY KEY NOT NULL,
            Department_name VARCHAR(20) NOT NULL,
            Manager_id INT(8),
            Location_id INT(8))";

}
function data_insert() {
    return "INSERT INTO Departments(Departmnet_id,Department_name,Manager_id,Location_id) VALUES
            (10,'Administration',200,1700),
            (20,'Marketing',201,1800),
            (50,'Shipping',124,1500),
            (60,'IT',103,1400),
            (80,'sales',149,2500),
            (90,'Executive',100,1700),
            (110,'Accounting',205,1700),
            (190,'Contracting',NULL,1700);";
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
        if(mysqli_query($link,data_insert())){
            echo "Data inserted.\n";
        }
    }
    else{
        if(mysqli_query($link,data_insert())){
            echo "Data inserted";
        }
    }

}
else{
    echo "Database already exists.\n";
    $link = mysqli_connect($servername,$username,$password,$database);
    if(mysqli_query($link,create_table())){
        echo "Table created";
        if(mysqli_query($link,data_insert())){
            echo "Data inserted";
        }
    }
    else{
        echo "Table already exists.\n";
        if(mysqli_query($link,data_insert())){
            echo "Data inserted";
        }
        else{
            echo "Data inserted";
        }
    }
}
mysqli_close($link);
?>