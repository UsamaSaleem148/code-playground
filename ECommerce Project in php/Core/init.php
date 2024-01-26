<?php

$dbconnect = mysqli_connect('localhost:3307','root','','ecommerce');

if(mysqli_connect_errno()){
	echo 'Not Connected : ' .mysql_connect_error();
	die();
}

?>