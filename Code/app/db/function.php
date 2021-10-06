<?php

function loadAvatar($maxFileSize, $validFileType, $avatarPath, $nameElem){
    $error = "";
    $avatarName = "";
    if (isset($_FILES[$nameElem])) {
        $file = $_FILES[$nameElem];

        $stepName = pathinfo($file['name'], PATHINFO_FILENAME). "_". time();
        $stepExt = pathinfo($file['name'], PATHINFO_EXTENSION);

        $avatarName = $stepName . "." . $stepExt;


        if (!empty($file['error'])) {  //Если error не пустой.
            $error = "Произошла ошибка - при загрузке данных";
        } else if ($file['size'] > $maxFileSize) {
            $error = "Файл недолжен превышать" . $maxFileSize . "байт";
        } else if (in_array($file['type'], $validFileType)) {
            if (!move_uploaded_file($file['tmp_name'], $avatarPath . $avatarName)) {
                $error = 'Не удалось загрузить изображение';
            }
        } else {
            $error = 'Расширение должно быть png, jpg, jpeg.';
        }
    }

	return [$errors, $avatarName];
}








function deleteIMG($file): string
{
    $error = "";
    if (!unlink($file)) {
                $error .= " Ошибка удаления файла ";
    }
    return $error;
}