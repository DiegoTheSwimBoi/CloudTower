<?php
const CONN = [
    "host" => "localhost",
    "dbname" => "db_cipher",
    "login" => "root",
    "password" => "root",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
];

$maxFileSize=5*1024*1024;
$validFileType=["image/jpg","image/jpeg","image/png"];

$maxExelSize =24*1024*1024;

$validFileExelType=["application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","application/vnd.ms-excel"];

$avatar='/user/avatar/';
$avatarPath= $_SERVER["DOCUMENT_ROOT"].$avatar;

