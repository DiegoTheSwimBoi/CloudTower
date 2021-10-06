<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';


$id = $_GET['table'];

$tableObj=$dataTable->findTable($id);

if($user->id==$tableObj->user_id){

$rows=$dataTable->findRow($id);

$types=$dataTable->getAllTypes();


}else{
    header('Location: /user/');
}



include "table.view.php";