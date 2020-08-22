<?php
function data_insert() {
    return "INSERT INTO jobs(job_id,job_title,MIN_SALARY,MAX_SALARY) VALUES
            (AD_PRESS,'PRESIDENT',20000,40000),
            (AD_VP,'Administration Vice President',15000,30000),
            (AD_ASST,'Administration Assistant',3000,6000),
            (AC_MGR,'Accounting Manager',8200,16000),
            (AC_ACCOUNT,'Public Accountant',4200,9000),
            (SA_MAN,'Sales Manager',10000,20000),
            (SA_REP,'Sales Representative',6000,12000),
            (ST_MAN,'Stock Manager',55000,8500),
            (ST_CLERK,'Stock Clerk',2000,5000),
            (IT_PROG,'Programmer',4000,10000),
            (MK_MAN,'Marketing Manager',9000,15000),
            (MK_REP,'Marketing Representative',4000,9000);";
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
    echo "Data inserted";
}
?>