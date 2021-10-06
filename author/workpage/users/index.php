<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/authorSec.php';

$users=$dataAuth->AllUsers(2);

if(isset($_GET['email']) && $_GET['email']!=""){
    $input=$_GET['email'];
    $search=$dataAuth->searchUsers($input);
}


include "index.view.php";