<?Php

namespace App\models;

use PDO;

class Auth
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
	
	
	public function isAuthor($user){
		if ($user->roles_id == "1") {
            return true;
        }
        return false;
	}

    public function typeRole($user,$type){
		if ($user->roles_id == $type) {
            return true;
        }
        return false;
	}
	
	
	public function auth($email,$password)
    {
       $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email=?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();
        if ($user) {
            if (password_verify($password, $user->password)) {

                return $user;
            }
        };

        return false;
    }

    public function register($email,$telephone,$password,$date,$avatar,$count,$role)
    {
        if($this->auth($email,$password)){
			return -1;
		}
    
	
	$stmt = $this->pdo->prepare("Insert into users (email,telephone,password,date,avatar,count_table,roles_id)
	                            values(:email,:telephone,:password,:date,:avatar,:count_table,:roles_id)");
    
	$stmt->execute([
	'email'=>$email,
	'telephone'=>$telephone,
	'password'=>password_hash($password,PASSWORD_DEFAULT),
	'date'=>$date,
	'avatar'=>$avatar,
    'count_table'=>$count,
	'roles_id'=>$role,
	]);
	
	return $this->pdo->lastInsertId();
  }
  
  
    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
	
	public function updateAvatar($id,$avatar){
        $stmt = $this->pdo->prepare("UPDATE users
        SET avatar=:avatar
        WHERE id = :id");
        
      $stmt->execute([
     'id'=> $id,     
     'avatar'=>$avatar,
    ]);			
        
    }

    //Table;
    
    public function UpdateTables($id,$count){
        $stmt = $this->pdo->prepare("UPDATE users
        SET count_table=:count_table
        WHERE id = :id");

        $stmt->execute([
         'id'=>$id,
         'count_table'=> $count
       ]);
    }



    //Author  work starts here.
	
	public function AllUsers($id){
		$stmt = $this->pdo->prepare("SELECT * FROM users WHERE roles_id=?");
		$stmt->execute([$id]);
		return $stmt->fetchAll();
	}

    public function searchUsers($email){
        $stmt = $this->pdo->prepare("SELECT * FROM users
        WHERE email like :email AND roles_id=2");

        $stmt->execute([
         'email'=>$email . "%"
       ]);
       return $stmt->fetchAll();  
    }


    public function banUser($id,$ban){
        $stmt = $this->pdo->prepare("UPDATE users
        SET roles_id=:roles_id
        WHERE id = :id");

        $stmt->execute([
            'id'=>$id,
            'roles_id'=> $ban
        ]);

    }


}