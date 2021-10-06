<?php
session_start();

if($user){
	session_unset();
	session_destroy();
	session_start();
	$user=false;
}


include "regin.view.php";

