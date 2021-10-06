<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';


$types=$dataTable->getAllTypes();

if(count($tables)>$maxTables){
    header("Location: /user/limit/");
}



include "table.view.php";