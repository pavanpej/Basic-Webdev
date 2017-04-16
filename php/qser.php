<?php
    include("mysqldb.php");
//capture form data
    $usn=mysql_real_escape_string($_POST['usn']);
    
    $db=dbconnect();

    mysql_select_db("db2");

    $sql="select * from student where usn = '$usn';";
    $res=mysql_query($sql);
    if($res){
        $numrow=mysql_num_rows($res);
        echo "<h1>No of rows: ".$numrow."</h1>";
        while($row=mysql_fetch_assoc($res)){
            echo "<table><tr><td>";
            echo "USN: </td><td>".$row['usn']."</td></tr>";
            echo "<tr><td>Name: </td><td>".$row["fname"]." ".$row["lname"]."</td></tr>";
            echo "<tr><td>Username: </td><td>".$row["username"]."</td></tr>";
            echo "<tr><td>College: </td><td>".$row["college"]."</td></tr></table>";
        }
    }
    else{
        echo "<h1>No data</h1>";
    }
    echo "<hr/><br><a href='../form2.html'>Back</a>";
mysql_close($db);
?>