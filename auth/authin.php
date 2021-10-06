<?php 
use App\models\Validator;
include $_SERVER['DOCUMENT_ROOT'].'/bootstrap.php';

if(isset($_POST['submit'])){
    $email = Validator::preProcessing($_POST['email']);
    $password = Validator::preProcessing($_POST['password']);
    $user = $dataAuth->auth($email,$password);

    if($user){
        if($dataAuth->typeRole($user,2)){
        $_SESSION['user']=json_encode($user,JSON_UNESCAPED_UNICODE);
        $_SESSION['auth']=true;
        header('Location: /user/');
        }
        else if($dataAuth->typeRole($user,1)){
            $_SESSION['user']=json_encode($user,JSON_UNESCAPED_UNICODE);
            $_SESSION['auth']=true;
            header('Location: /author/workpage/');
        }
        else{
            header('Location: /user/banned/');
        }
    }else{
        $_SESSION['errors']['auth']='Неправильно введён логин или пароль...';
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header('Location: /auth/');
    }
}