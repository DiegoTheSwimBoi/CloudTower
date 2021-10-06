<?Php

namespace App\models;

use PDO;

class Table
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
	
	//  Работа с таблицей Tables;
	
	public function addTable($name,$userID,$row)
    {
       $stmt = $this->pdo->prepare("INSERT into tables (name,user_id,rows_count)
	                               values (:name,:user_id,:rows_count)");
        $stmt->execute([
	             'name'=>$name,
	             'user_id'=>$userID,
                 'rows_count'=> $row,
	            ]);
				
		return $this->pdo->lastInsertId();
    }
	
	public function showAllTable($userID)
    {
       $stmt = $this->pdo->prepare("SELECT * from tables
	   WHERE user_id = ?");
        $stmt->execute([$userID]);
		
		return $stmt->fetchAll();
    }
	
	
	public function findTable($id)
    {
       $stmt = $this->pdo->prepare("SELECT * from tables
	   WHERE id = ?");
        $stmt->execute([$id]);
		
		return $stmt->fetch();
    }
	
	public function updateTable($id,$name)
    {
       $stmt = $this->pdo->prepare("UPDATE tables
	   SET name=:name
	   WHERE id = :id");
        $stmt->execute([
		'id'=>$id,
		'name'=>$name,
		]);
    }
	
	public function updateTableRows($id,$count)
    {
       $stmt = $this->pdo->prepare("UPDATE tables
	   SET rows_count=:rows_count
	   WHERE id = :id");
        $stmt->execute([
		'id'=>$id,
		'rows_count'=>$count,
		]);
    }
	
	
	
	
	
	public function deleteTable($id)
    {
       $stmt = $this->pdo->prepare("DELETE FROM tables
                                           WHERE id=?");
        $stmt->execute([$id]);
    }
	
	//  Работа с таблицей Types;
	
	public function getAllTypes(){
		$stmt = $this->pdo->query('SELECT * from types');
		return $stmt->fetchAll();
	}
	

	public function getTypeByID($id){
		$stmt = $this->pdo->prepare("SELECT * from types 
		WHERE id = ?");
		$stmt->execute([$id]);
		return $stmt->fetch();
	}
	

		
	//  Работа с таблицей elements;
	
	public function addRows($rows,$ID,$length,$types)
    {
       $stmt = $this->pdo->prepare("INSERT INTO elements (name,length,table_id,type_id) 
	                               VALUES (:name,:length,:table_id,:type_id)");
		
			$stmt->execute([
	             'name'=>$rows,
				 'length'=>$length,
	             'table_id'=>$ID,
				 'type_id'=>$types,
	            ]);
	
	return $this->pdo->lastInsertId();		
    }

	public function DeleteRows($id)
    {
		$stmt=$this->pdo->prepare("DELETE FROM elements 
		where id=:id");
		$stmt->execute([
			'id'=>$id,
		]);
	}

	
	public function findRow($id)
    {
       $stmt = $this->pdo->prepare("SELECT * from elements 
	   WHERE table_id = ?");
        $stmt->execute([$id]);
		
		return $stmt->fetchAll();
    }
	
	
	 public function getRowsforEdit($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM elements INNER JOIN types ON 
                                           elements.type_id = types.id
                                           WHERE elements.table_id=? ");
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }
	
	
	 public function getRowsforEdit2()
    {
        $stmt = $this->pdo->query("SELECT * FROM elements INNER JOIN types ON 
                                           types.id = elements.type_id");
        return $stmt->fetchAll();
    }
	
		
	public function updateRows($id,$rows,$size,$types){
		$stmt = $this->pdo->prepare("UPDATE elements
		            SET name=:name,type_id=:type_id, length=:length
					WHERE id = :id");
					
			$stmt->execute([
	             'name'=>$rows,
	             'id'=>$id,
				 'type_id'=>$types,
				 'length'=>$size
	            ]);			
					
	}

	//  Работа с таблицей contents 

public function getContent($id){
	$stmt = $this->pdo->prepare("SELECT DISTINCT rowByOne  from contents
	WHERE table_id=?");

    $stmt->execute([$id]);

	return $stmt->fetchAll();
}

public function getContentByIDs($id,$row){
	$stmt = $this->pdo->prepare("SELECT *  from contents
	WHERE table_id=:table_id AND rowByOne=:rowByOne");

   $stmt->execute([
	  'table_id'=>$id,
	  'rowByOne'=>$row,
    ]);	

	return $stmt->fetchAll();
}



public function insertContent($elem, $type, $content,$id,$row){
	$stmt = $this->pdo->prepare("INSERT INTO 
	                            contents (element_id,type_id,content,table_id,rowByOne) 
	                               VALUES (:element_id,:type_id,:content,:table_id,:rowByOne)");
		
			$stmt->execute([
	             'element_id'=>$elem,
				 'type_id'=>$type,
				 'content'=>$content,
				 'table_id'=>$id,
				 'rowByOne'=>$row
	            ]);	
}


public function deleteContent($table,$row){
	$stmt=$this->pdo->prepare("DELETE FROM contents 
	where table_id=:table_id AND rowByOne=:rowByOne");
	$stmt->execute([
		'table_id'=>$table,
        'rowByOne'=>$row,
	]);
}

public function updateContent($data,$id){
	
		$stmt = $this->pdo->prepare("UPDATE contents
		            SET content=:content
					WHERE id = :id");
					
			$stmt->execute([
	             'content'=>$data,
	             'id'=>$id,
	            ]);			
					
	
}


// Здесь, к сожалению нормальная пользовательская сортировка не доработана. 





}