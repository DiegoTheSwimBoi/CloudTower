<?php

if(!$user){
	header('Location: /');
}else if($dataAuth->typeRole($user,3)){
	header('Location: /user/banned/');
}