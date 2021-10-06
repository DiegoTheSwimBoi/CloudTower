<?Php

namespace App\models;

use PDO;

class Helping
{
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectedValues(){
    $stmt=$this->pdo->query("SELECT * from dbs_helping_hand");
    return $stmt->fetchAll();
    }



    public function getValuesbyID($id){
        $stmt=$this->pdo->prepare("SELECT * from dbs_helping_hand
        WHERE id=?");

       $stmt->execute([$id]);

       return $stmt->fetch();
    }




    public function updateTableValues($id,$value){
       $stmt=$this->pdo->prepare("UPDATE dbs_helping_hand
       SET valid=:valid WHERE id=:id");

      $stmt->execute([
       'id'=>$id,
       'valid'=>$value,
      ]);

    }
}