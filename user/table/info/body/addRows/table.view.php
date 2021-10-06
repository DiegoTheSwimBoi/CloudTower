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

<form action="addRows.php" method="POST">

<input type="hidden" value="<?=$tableID?>" name="tableID">

</div>

<hr>

<p style="display: <?=$_SESSION['errors']['name'] ? 'block':'none'?>; color: <?=$_SESSION['errors']['name'] ? 'red':'green'?>;"><?=$_SESSION['errors']['name']?></p>


 <table>
   <tr>
    <th>Имя</th>
    <th>Тип</th>
	<th>Длинна/Значение</th>
   </tr>
<?php for ($i=0;$i<$rowsCount;$i++): ?>   
   <tr><td><label>Имя: <input type="text" name="rowname[]" required></label></td><td>
   <select name="rowtype[]">
<?php if(!empty($types)): ?>
<?php foreach ($types as $type): ?>
<option value="<?= $type->id ?>" ><?= $type->name ?></option>
<?php endforeach; ?>
<?php endif; ?>
</select></td>
<td><input type="number" name="size[]" value="0" min="0" max="100"></td>
</tr>
<?php endfor; ?>     
</table>

<button type="submit" name="addRow">Ок</button>
</form>

<script src="/script/dark.js"></script>
</body>
</html>