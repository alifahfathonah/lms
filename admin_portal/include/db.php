<?php 

$db=new MYSQLi("localhost","root","mac&123","laundry");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>