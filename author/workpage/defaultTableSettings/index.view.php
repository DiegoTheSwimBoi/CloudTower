<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CloudTower</title>
    <link rel="shortcut icon" href="/img/icon/icon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/footer.css">
	<link rel="stylesheet" href="/css/userPanel.css">
	<link rel="stylesheet" href="/css/font.css">
	<link rel="stylesheet" href="/css/menu.css">
	<link rel="stylesheet" href="/css/switch.css">
	<link rel="stylesheet" href="/css/dark.css">
	<link rel="stylesheet" href="/css/search.css">
</head>
<body>
<div id="main">


<?php include $_SERVER['DOCUMENT_ROOT']."/template/index/userPanel.php" ?>

<div style=" margin-bottom:100px;"><?php include $_SERVER['DOCUMENT_ROOT']."/template/author/menu.php" ?></div>


<div class="main content">

<h1 style="text-align: center;">Настройки таблиц</h1>


<?php if($select):?>
<div class="section">
<p style="display: <?=$_SESSION['errors']['valid'] ? 'block':'none'?>; color: <?=$_SESSION['errors']['valid'] ? 'red':'green'?>;"><?=$_SESSION['errors']['valid']?></p><br>
<table>
<form method="POST" action="change.php">
<?php foreach($select as $field):?>
	<tr><td><div><label><?=$field->name?>:</td>
	<td><input type="hidden" value="<?=$field->id?>" name="id[]">
	<input type="number" value="<?=$field->valid?>" name="valid[]" min="3" max="10"></label></div></td>
	<td>  <p style="font-size: 12px;"><?=$field->description?></p></td></tr>
<?php endforeach; ?>
<tr><td><button type="submit" name="submit">Изменить</button></td></tr>
</form>
</table>
<?php endif; ?>
</div>
</div>






</div>
<script src="/script/dark.js"></script>
<script src="/script/search.js"></script> 
</body>
</html>