<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';


$tableObj=$dataTable->findTable($_GET['table']); 

if($user->id==$tableObj->user_id){
$rows=$dataTable->findRow($_GET['table']);

$contID=$dataTable->getContent($_GET['table']);


$count=0;

if(!empty($contID)){
   $count=count($contID)+1;
}else{
    $count++;
}

}else{
    header('Location: /user/');
}




include "table.view.php";