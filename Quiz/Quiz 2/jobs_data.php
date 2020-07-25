<?php
function data_insert() {
    return "INSERT INTO Departments(jod_id,job_title,MIN_SALARY,MAX_SALARY) VALUES
            (AD_PRESS,'PRESIDENT',20000,40000),
            (AD_VP,'Administration Vice President',15000,30000),
            (AD_ASST,),
            (AC_MGR,),
            (AC_ACCOUNT,),
            (SA_MAN,),
            (SA_REP,),
            (ST_MAN,);";
}

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'VS_CODE_TEST';

$link = mysqli_connect($servername,$username,$password,$password);

if($link == false){
    die("Error: could not connect." .mysql_connect_error($link));
}

if(mysqli_query($link,data_insert())){
    echo "Data inserted";
}
?>