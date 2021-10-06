<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

if(isset($_POST['submit'])){
  $valid=$_POST['valid'];
  $id=$_POST['id'];

   if($valid[0]>=$valid[1]){
      for ($i=0; $i < count($id); $i++) { 
        $HELP->updateTableValues($id[$i],$valid[$i]);
      }
      $_SESSION['errors']['valid']="";
      header('Location: /author/workpage/defaultTableSettings/');
   }else{
       $_SESSION['errors']['valid']="Выставьте минимальное и максимальное значение доступных полей для пользователя правильно";
       header('Location: /author/workpage/defaultTableSettings/');
   }


}