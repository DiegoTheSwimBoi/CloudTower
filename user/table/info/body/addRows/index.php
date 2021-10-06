<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';





$types=$dataTable->getAllTypes();

$rowsCount=$_POST['newRows'];
$tableID=$_POST['tableID'];


include "table.view.php";