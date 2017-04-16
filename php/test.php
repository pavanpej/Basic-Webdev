<?php
    #phpinfo();
    echo "<h1 style='color:red'>Hello</h1>";
    // the dot is used to concatenate strings
    //reading values as follows
    $name= $_POST['txtname'];
    $pwd= $_POST['txtpwd'];
    $sem= $_POST['sem'];
    /*$branch= $_POST['branch'];
    $address= $_POST['textarea']; 
    $vals = array($name,$pwd,$sem,$branch,$address);
    #$vals[]=$year;
    //associative array is declared as follows
    $assoc_array=array(
    	"name"=> $name,				
    	"password"=> $pwd,
    	"sem"=> $sem,
    	"branch"=> $branch,
    	"address"=> $address
    	);
    	//used for displaying as key value pairs

    //functions in PHP
   /* function display($content) {
    	
	    echo "<h1>My name is ". $content['name']."</h1>";
	    echo "<h3>Password is ". $content['password']."</h3>";
	   /* echo "<h3>Semester is ". $content['sem']."</h3>";
	    echo "<h3>Branch is ". $content['branch']."</h3>";
	    echo "<h3>Address :<br/><br/> ". $content['address']."</h3>"; 
	    */
   // }
    //display($assoc_array);

    //dynamic content
    $error=array();
    function genText($n) {
    	for ($i=1; $i<=$n ; $i++) { 
    		echo "Results of sem ".$i. " <input type='text' name=txtname".$i."/><br/>";
    	}
    }
    if(empty($name))
    {
    	$error[]="Please enter name";
    }
	if(!empty($error))
	{
		echo "<div style='background-color:red'>".$error."</div>";
	}
    if(empty($error)){
    	genText($sem);
    }
    else{
    	header('Location:test.php?error='.join($error,urldecode('<br/>')));
    }

	/*include concept
	is used to divid page into parts so that we may maintain the look and feel of the webpage
	*/
/*
	echo "<table><tr><td>".include "headerdoc.php"."</td></tr><tr><td>".include "leftdoc.php"."</td><td>".include "homedoc.php"."</td></tr></table>";    
*/

	//error handling - validation


?>