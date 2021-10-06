<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if(isset($_POST['submit'])){
    $email=$_POST["data-search"];
    
    header("Location: /author/workpage/users/?email=$email");
}