<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/authorSec.php';

$users=$dataAuth->AllUsers(3);




include "index.view.php";