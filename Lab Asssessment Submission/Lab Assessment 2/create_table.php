<?php
$link = mysqli_connect('localhost','root','','VS_CODE_TEST');
if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}
$sql = "CREATE TABLE test_table(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Table could not be created." .mysqli_error($link);
}
mysqli_close($link);
?>