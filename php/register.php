<?php
    include("mysqldb.php");
//capture form data
    $usn=$_POST['usn'];
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $un=$_POST['username'];
    $pwd=$_POST['password'];
    $clg=$_POST['college'];
    $db=dbconnect();

    mysql_select_db("db2");

    $sql="INSERT INTO student VALUES ('$usn','$fn','$ln','$un','$pwd','$clg') ;";
    $res=mysql_query($sql);
    if($res){
        echo "<h1>Data Insertion Successful</h1>";
    }
    else{
        echo "<h1>Data Insertion Unsuccessful</h1>";
    }
    echo "<hr/><br><a href='../form1.html'>Back</a>";
mysql_close($db);
?>