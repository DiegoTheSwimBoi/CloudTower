<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';


$tableObj=$dataTable->findTable($_GET['table']); 

if($user->id==$tableObj->user_id){
$rows=$dataTable->findRow($_GET['table']);
$types=$dataTable->getAllTypes();




$content=[];

$ConRows = $dataTable->getContent($_GET['table']);

$id = $_GET['table'];


}else{
    header('Location: /user/');
}




include "table.view.php";