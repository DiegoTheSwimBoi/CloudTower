<?php

include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

$id = $_POST['id'];

if(isset($_POST['delRows'])){

    if(isset($_POST['index'])){
        $arr = $_POST['index'];

        foreach ($arr as $i) {
            $dataTable->deleteContent($id,$i);
        }
    header("Location: /user/table/info/?table=$id");

    }else{
        header("Location: /user/table/info/editContent/?table=$id");
    }
}

if(isset($_POST['editRows'])){
$ids = $_POST['rowID'];

$data=$_POST['data'];

for ($i=0; $i<count($ids); $i++) { 
    $dataTable->updateContent($data[$i],$ids[$i]);
}

header("Location: /user/table/info/?table=$id");

}
