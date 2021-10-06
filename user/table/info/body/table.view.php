<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CloudTower</title>
    <link rel="shortcut icon" href="/img/icon/icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/settings.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/font.css">
	<link rel="stylesheet" href="/css/switch.css">
	<link rel="stylesheet" href="/css/dark.css">
</head>
<body>
<div id="main">

<?php include $_SERVER['DOCUMENT_ROOT']."/template/index/userHeader.php" ?>

<div class="usercontent">


<h1><?=$tableObj->name?></h1>
</div>
<hr>

 
<p style="display: <?=$_SESSION['errors']['name'] ? 'block':'none'?>; color: <?=$_SESSION['errors']['name'] ? 'red':'green'?>;"><?=$_SESSION['errors']['name']?></p>

<div class="usercontent">
<table border="2">
   <tr style="background: #cccccc;">
    <th style="padding: 20px;">Имя</th>
    <th style="padding: 20px;">Тип</th>
   </tr>
<?php foreach($rows as $row): ?>   
   <tr ><td><?=$row->name?></label></td>
<td style="padding: 20px;">
<?php if(!empty($types)): ?>
<?php foreach ($types as $type): ?>
<?=$type->id == $row->type_id?"{$type->name}":""; ?>    
<?php endforeach; ?>
<?php endif; ?>
</td>
</tr>
<?php endforeach; ?>
</table>
</div>




<div style="display: <?=$tableObj->rows_count<$maxLenght?"block":"none"?>">
<form action="/user/table/info/body/addRows/" method="POST">
<h1>Добавить поля:</h1>
<label>Кол-во новых полей в таблице: <input type="number" min="1" max="<?=$maxLenght - $tableObj->rows_count?>" value="1" name="newRows"></label>
<input type="hidden" value="<?=$tableObj->rows_count?>" name="existedRows">
<input type="hidden" value="<?=$tableObj->id?>" name="tableID">
<button name="submit" type="submit">Ok</button>
</form>
</div>
<p>Кол-во доступных полей: <?=$maxLenght - $tableObj->rows_count?></p>




<script src="/script/dark.js"></script>
</body>
</html>