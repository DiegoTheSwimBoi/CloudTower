<?php

include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

	$id = $_POST['ID'];
	$ids = $_POST['TODO'];
    
	if(isset($_POST['delOne'])){
		$dataTable->deleteTable($id);

	   $count=(int)$user->count_table-1;

	   $dataAuth->UpdateTables($user->id,$count);
	
	   header('Location: /user/');
	}

	if(isset($_POST['editTable'])){
		header("Location: /user/table/edit/?table=$id");
	}


	if(isset($_POST['deleteAll'])){
		

		if(!empty($ids)){

		 foreach ($ids as $Td) {
			$dataTable->deleteTable($Td);
		 }

		 $count=(int)$user->count_table-count($ids);
	     $dataAuth->UpdateTables($user->id,$count);
	    }	

		header('Location: /user/');
	}

	



