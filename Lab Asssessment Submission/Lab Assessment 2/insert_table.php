<?php
$link = mysqli_connect('localhost','root','','VS_CODE_TEST');
if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}
$sql = "INSERT INTO test_table(id,username,password) VALUES
('1','DEMO','DEMO')";

if(mysqli_query($link, $sql)){
    echo "Values Inserted";
}
else{
    echo "Could not insert values." .mysqli_error($link);
}
mysqli_close($link);
?>