<?php
session_start();

use App\db\Connect;
use App\models\Auth;
use App\models\Validator;
use App\models\Table;
use App\models\Helping;

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/config.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/Connect.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/rowVerify.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/function.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/models/Validator.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/models/Table.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/models/Auth.php';
include $_SERVER["DOCUMENT_ROOT"].'/Code/app/models/Helping.php';

$user= isset($_SESSION['auth'])&& $_SESSION['auth'] ? json_decode($_SESSION['user']):false;

$pdo=Connect::make(CONN);

$dataAuth = new Auth($pdo);

$dataTable = new Table($pdo);

$HELP = new Helping($pdo);



$validDefaultRows=$HELP->getValuesbyID(6)->valid;

$maxLenght=$HELP->getValuesbyID(5)->valid;

$maxTables=$HELP->getValuesbyID(7)->valid;


$tables = $dataTable -> showAllTable($user->id);