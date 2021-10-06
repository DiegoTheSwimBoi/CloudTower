<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if(isset($_POST['submit'])){
    $Usersid=$_POST['banbox'];

if(!empty($Usersid)){
    foreach($Usersid as $id){
        $dataAuth->banUser($id,3);
    }
}

header('Location: /author/workpage/users/');

}