<?php
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if($user){
	session_unset();
	session_destroy();
	session_start();
	$user=false;
	header('Location: /');
}

include "auth.view.php";