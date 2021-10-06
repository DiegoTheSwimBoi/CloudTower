<?php

include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if(isset($_POST['addRow'])){
    $name = trim($_POST['tableName']);
    $userID = $_POST['userID'];
	$rows = $_POST['rowname'];

	$size=$_POST['size'];
	
	$types = $_POST['rowtype'];
	


	if($user->count_tables<=$maxTables){
	if(isset($name) && !empty($name) && !empty($rows) && !empty($types)){

        $count = (int)$user->count_tables+1;

		

        $id=$dataTable->addTable($name,$userID,count($rows));

		for($i=0;$i<count($rows); $i++){
		$dataTable->addRows($rows[$i],$id,$size[$i],$types[$i]);
		}
		

		$dataAuth->UpdateTables($user->id,$count);

		$_SESSION['errors']['name']="";
		header('Location: /user/');
	}else {
		$_SESSION['errors']['name']="Имя таблицы недолжно быть пустым";
		header('Location: /user/table/');
	}	
}else{
	$_SESSION['errors']['name']="Превышен лимит создаваемых таблиц";
		header('Location: /user/table/');
}		
}
