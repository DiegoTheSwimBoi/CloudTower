<?php 
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if(isset($_POST['submit'])){
    unset($_SESSION['errors']['register']);
    $email = Validator::preProcessing($_POST['email']);
    $password = Validator::preProcessing($_POST['password']);
	$telephone = $_POST['tel'];
	$date = $_POST['date'];
	
	if(isset($_POST['date'])){
		$date='1999-09-12';
	}
	if(isset($_POST['tel'])){
		$telephone='-/-/-/-';
	}

    $folder="custom"."/".$email;

   if(is_dir($avatarPath.$folder)){
    header('Location: /regin/');
    $_SESSION['errors']['register'] = 'Сбой в системе. Не удалось зарегистрироваться.';
   }else{

    if (!mkdir($avatarPath.$folder,0777,true)){
        header('Location: /regin/');
        $_SESSION['errors']['register'] = 'Сбой в системе. Не удалось зарегистрироваться.';
    }else{	
    
        copy($_SERVER["DOCUMENT_ROOT"]."/user/avatar/icon/DemoUser.png",$_SERVER["DOCUMENT_ROOT"]."/user/avatar/icon/DemoUser2.png");

        $rename = $avatarPath. $folder."/DemoUser.png";

        rename($_SERVER["DOCUMENT_ROOT"]."/user/avatar/icon/DemoUser2.png",$rename);

	
	if (Validator::validLength('Email', $email, 'email') &
            Validator::validLength('Password', $password, 'password')
        ) {
			
            $id = $dataAuth->register($email, $telephone, $password, $date,$folder."/DemoUser.png",0,2);
			

            if ($id < 0) {
                header('Location: /regin/');
                $_SESSION['errors']['register'] = 'Пользователь с такими данными зарегестрирован в системе.';
            } else if ($id > 0) {
                $_SESSION['user'] = json_encode($dataAuth->find($id), JSON_UNESCAPED_UNICODE);
                $_SESSION['auth'] = true;
                header('Location: /user/');
                die();
            } else {
                header('Location: /regin/');
                $_SESSION['errors']['register'] = 'Сбой в системе. Не удалось зарегистрироваться.';
            }

        }
		
    }	
}
		

	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	$_SESSION['telephone']=$telephone;
	$_SESSION['date']=$date;	
	
	
}