<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';



if(isset($_POST['submit'])){
    $name = trim($_POST['tableName']);
    
	$id = $_POST['ID'];
	$types=$_POST['rowtype'];
	$rows=$_POST['rowname'];
	$size=$_POST['size'];
	
	$rowID=$_POST['rowsid'];
	
	if(isset($name) && !empty($name) && !empty($rows) && !empty($types)){
		$dataTable->updateTable($id,$name); 

		for($i=0;$i<count($rowID);$i++){
			$dataTable->updateRows($rowID[$i],$rows[$i],$size[$i],$types[$i]);
		}
		header('Location: /user/');
	}else {
		$_SESSION['errors']['name']="Имя таблицы недолжно быть пустым";
		header('Location: /user/table/');
	}

}

if(isset($_POST['deleteRows'])){
	$rW = $_POST['toDelete'];
	$id = $_POST['ID'];

	if(!empty($rW)){
	for($i=0;$i<count($rW);$i++){
	$dataTable->DeleteRows($rW[$i]);
	}
}
 $count = (int)$dataTable->findTable($id)->rows_count - count($rW);

 $dataTable->updateTableRows($id,$count);

	header('Location: /user/');
	
}
