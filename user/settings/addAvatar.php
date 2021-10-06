<?php
include $_SERVER["DOCUMENT_ROOT"]. "/bootstrap.php";


if(isset($_POST['addAvatar'])){


    deleteIMG($avatarPath.$user->avatar);

    $folder="custom"."/".$user->email."/";
    
    $newPath=$avatarPath.$folder;

    [$error, $avatarName] =
    loadAvatar($maxFileSize, $validFileType, $newPath , 'avatar');

    if (empty($error)) {
        $avatar = $folder.$avatarName;


    
    $dataAuth->updateAvatar($user->id,$avatar);
    header('Location: /user/');
    }

    

    
}