<?php
function create_table(){
    return "CREATE TABLE jobs(
            job_id VARCHAR2(10) PRIMARY KEY NOT NULL,
            job_title VARCHAR2(35) NOT NULL,
            MIN_SALARY NUMBER(6),
            MAX_SALARY NUMBER(6)";

}

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'VS_CODE_TEST';

$link = mysqli_connect($servername,$username,$password,$database);

if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}

if(mysqli_query($link,create_table())){
    echo "Table created";
}
else{
    echo "Table already exists.\n";
}
?>