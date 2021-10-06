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

<form action="editTable.php" method="POST">
<label>Имя Таблицы: <input type="text" name="tableName" required value="<?=$tableObj->name?>"></label>
<label><input type="hidden" name="ID" value="<?=$tableObj->id?>"></label>
<button type="submit" name="submit">Ок</button>
</div>
<hr>

 
<p style="display: <?=$_SESSION['errors']['name'] ? 'block':'none'?>; color: <?=$_SESSION['errors']['name'] ? 'red':'green'?>;"><?=$_SESSION['errors']['name']?></p>


<table>
   <tr>
    <th>Имя</th>
    <th>Тип</th>
	<th>Длинна/Значение</th>
   </tr>
<?php foreach($rows as $row): ?>   
   <tr><td><input type="checkbox" name="toDelete[]" value="<?=$row->id?>"><label>Имя: <input type="text" name="rowname[]" value="<?=$row->name?>"></label></td><td>
   <input type="hidden" name="rowsid[]" value="<?=$row->id?>">

<select name="rowtype[]">
<?php if(!empty($types)): ?>
<?php foreach ($types as $type): ?>
<option value="<?= $type->id ?>"  <?=$type->id == $row->type_id?"selected":""; ?>  ><?= $type->name ?></option>
<?php endforeach; ?>
<?php endif; ?>
</select></td>
<td><input type="number" name="size[]" value="<?=$row->length?>" min="0" max="300"></td>
</tr>
<?php endforeach; ?>
</table>


<button type="submit" name="deleteRows">Delete all rows</button>

</form>


<script src="/script/dark.js"></script>
</body>
</html>