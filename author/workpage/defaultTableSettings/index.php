<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/authorSec.php';

$select = $HELP->selectedValues();


include "index.view.php";