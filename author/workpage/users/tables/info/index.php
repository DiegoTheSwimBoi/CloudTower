<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";


$tableObj=$dataTable->findTable($_GET['table']); 

$rows=$dataTable->findRow($_GET['table']);
$types=$dataTable->getAllTypes();

$content=[];

$ConRows = $dataTable->getContent($_GET['table']);

$id = $_GET['table'];


include "table.view.php";