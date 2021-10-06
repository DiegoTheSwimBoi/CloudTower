<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/authorSec.php';

$userID=$_GET['user'];



$Usertables = $dataTable->showAllTable($userID);




include "index.view.php";