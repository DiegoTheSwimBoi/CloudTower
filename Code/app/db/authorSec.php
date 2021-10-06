<?php

if($user){
	if(!$dataAuth->typeRole($user,1)){
		header('Location: /');
	}
}else{
	header('Location: /');
}