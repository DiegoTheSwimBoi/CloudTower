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


<label>Имя Таблицы: <?=$tableObj->name?></label>
</div>

<p style="display: <?=$_SESSION['errors']['name'] ? 'block':'none'?>; color: <?=$_SESSION['errors']['name'] ? 'red':'green'?>;"><?=$_SESSION['errors']['name']?></p>

<form action="addRowTable.php" method="POST">
<input type="hidden" value="<?=$tableObj->id?>" name="id">

<input type="hidden" value="<?=$count?>" name="count">
<table>
<tr>
<th>Поле</th>
<th>Значение</th>
</tr>

<?php if($rows):?>
<?php foreach($rows as $row): ?>
<tr><td> <?=$row->name?> <?=$row->length>0?"($row->length)":""?></td>
<td>
<?php if($dataTable->getTypeByID($row->type_id)->id!=3):?>
<input type="hidden" value="<?=$row->type_id?>" name="type[]">
<input type="hidden" value="<?=$row->id?>" name="elements[]">

<input type="<?=$dataTable->getTypeByID($row->type_id)->input?>" name="data[]" required   value="<?=$dataTable->getTypeByID($row->type_id)->id==5?"$count":""?>">
<?php else: ?>
<input type="hidden" value="3" name="type[]">
<input type="hidden" value="<?=$row->id?>" name="elements[]">
<textarea name="data[]"   maxlength="<?=$row->length?>" rows="10" cols="45" style="resize: none; font-size: 1em;"></textarea>
<?php endif; ?>
</td>
</tr>
<?php endforeach; ?>
<?php endif;?>

</table>
<button type="submit" name="submit" onclick="return confirm('Добавить данные в таблицу?');">Ok</button>

</form>

<a href="/user/">Вернуться в личный кабинет.</a>

<script src="/script/dark.js"></script>
</body>
</html>