<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]. '/Code/Classes/PHPExcel.php';

 

include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";  

$id = $_POST['id'];



if(isset($_POST['submit'])){
    if(isset($_FILES['exl'])){
        $_SESSION['errors']['file']="";

        $folder="custom"."/".$user->email."/";
    
        $newPath=$avatarPath.$folder;

        

         [$error, $avatarName] =
         loadAvatar($maxExelSize,$validFileExelType, $newPath , 'exl');

         $Excel = PHPExcel_IOFactory::load($newPath.$avatarName);

         $Row = [];

         $arr=["A","B","C","D","E","F","G","H", "I", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "V", "X", "Y", "Z"];


         
         for ($i= 1; $i <= 1000; $i++){
          

          for ($j=0; $j<21; $j++) { 

            $index=$arr[$j].$i;

            if($Excel->getActiveSheet()->getCell($index)->getValue()!=NULL){
               $Row[$i-1][$j]=$Excel->getActiveSheet()->getCell($index)->getValue();
               
              
            }
		
          
            
 
          //if($Row->name == null) continue;
		
          }
    } 
    
    $column = $dataTable->findRow($id);

    for($i=0; $i<count($Row); $i++){

        for ($j=0; $j < count($column); $j++) { 
            $content=$Row[$i][$j];

            if($content==NULL) $content=" ";

              if($column[$j]->type_id=="5"){
                $dataTable->insertContent($column[$j]->id, $column[$j]->type_id, $i+1,$id,$i+1);
              }else{
                $dataTable->insertContent($column[$j]->id, $column[$j]->type_id, $content,$id,$i+1);
              }
        }



    }

    

    deleteIMG($newPath.$avatarName);
    
    header("Location: /user/table/info/?table=$id");


}
}
