<?php
function data_insert(){
    return "INSERT INTO Locations VALUES
        (1400,'2014 Jabberwocky Rd','26192','Southlake','Texas','US'),
        (1500,'2011 Interiors Blvd','99236','South San Francisco','California','US'),
        (1700,'2004 Charade Rd','98199','Seattle','Washington','US'),
        (1800,'460 Bloor St. W.','ON M5S 1X8','Toronto','Ontario','CA'),
        (2500,'Magdalen Centre- The Oxford Sc. Park','OX9 9ZB','OXford','Oxford','UK')";
}

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'VS_CODE_TEST';

$link = mysqli_connect($servername,$username,$password,$database);

if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}

if(mysqli_query($link,data_insert())){
    echo "Data inserted.\n";
}
else{
    echo mysqli_connect_error($link);
}
mysqli_close($link);
?>