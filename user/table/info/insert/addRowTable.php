<?php 

session_start();

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

$id = $_POST['id'];

if(isset($_POST['submit'])){
    $data=$_POST['data'];
    $type=$_POST['type'];
    $elements = $_POST['elements'];

    $count=$_POST['count'];

    if(!isset($data)){
        $data=" ";
    }
    

    if(isset($type) && isset($elements)){
        for ($i=0; $i <count($data); $i++) { 
            $dataTable->insertContent($elements[$i],$type[$i],$data[$i],$id,$count);
        }

        header("Location: /user/table/info/?table=$id");    
       $_SESSION['errors']['name']="";   
    }else{
    $_SESSION['errors']['name']="ERR";
    header("Location: /user/table/info/insert/?table=$id");
    }
}else{
    $_SESSION['errors']['name']="ERR";
    header("Location: /user/table/info/insert/?table=$id");
}