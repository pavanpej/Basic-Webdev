<?php
    function dbconnect(){
        $db=mysql_connect("localhost","root","") or die("No Database");
        return $db;
    }
?>