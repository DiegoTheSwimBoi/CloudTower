<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";

include $_SERVER["DOCUMENT_ROOT"].'/Code/app/db/security.php';



if(isset($_POST['addRow'])){
	
	if($tableObj->rows_count<=$maxLenght){
	$rows = $_POST['rowname'];
	$types = $_POST['rowtype'];
	$tableID=$_POST['tableID'];
    $size = $_POST['size'];
	
	if(!empty($rows) && !empty($types)){
		$table=$dataTable->findTable($tableID);
		$counts=(int)count($rows)+(int)$table->rows_count;
		
		if(valid_countRow($table,$maxLenght,$counts)){

			for($i=0; $i<count($rows);$i++){
				$dataTable->addRows($rows[$i],$tableID,$size[$i],$types[$i]);
			}
			
			$dataTable->updateTableRows($tableID,$counts);
		}
	}	
}

header("Location: /user/");	

}
	


