<?php
$MySQLi_connection = mysqli_connect('localhost','root','','test');
if($MySQLi_connection->connect_error)
{
    echo "Not Connected, error" .$MySQLi_connection->connect_error;
}

else{
    echo "Connected";
}
mysqli_close($MySQLi_connection);
?>
