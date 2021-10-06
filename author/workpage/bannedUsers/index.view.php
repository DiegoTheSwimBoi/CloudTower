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

<h1>Пользователи и таблицы</h1>


<div class="section">

<hr>

<?php if($users):?>
<form method="POST" action="userManipulation.php">
<?php foreach($users as $baned):?>
<div>
<label><input type="checkbox" value="<?=$baned->id?>" name="banbox[]"><a><?=$baned->email?></a></label>
</div>

<?php endforeach; ?>
<hr>
С выбранными пользователями:
<button type="submit" name="submit" onclick="return confirm('Выбранных пользователей вы можете разблокировать. \n \n Вы точно хотите разблокировать этих пользователей? \n')">Разблокировать</button>
</form>
<?php endif; ?>
</div>
</div>






</div>
<script src="/script/dark.js"></script>
<script src="/script/search.js"></script> 
</body>
</html>