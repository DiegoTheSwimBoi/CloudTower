<?php

include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';

$tables=$dataTable->showAllTable($user->id);

include 'index.view.php';
	