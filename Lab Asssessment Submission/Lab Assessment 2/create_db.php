<?php
$link = mysqli_connect('localhost','root','');
if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}
$sql = "CREATE DATABASE VS_CODE_TEST";

if(mysqli_query($link, $sql)){
    echo "DB Created";
}
else{
    echo "DB could not be created." .mysqli_error($link);
}
mysqli_close($link);
?>