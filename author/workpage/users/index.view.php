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

<h1 style="text-align: center;">Пользователи и таблицы</h1>


<div class="section">
<form method="POST" action="search.php">
<label>
E-mail:
<input list="brow" name="data-search" value="<?=$input?"$input":""?>">
<datalist id="brow">
<?php foreach($users as $user):?>
<option value="<?=$user->email?>">
<?php endforeach;?>
</datalist> 
</label>

<button type="submit" name="submit">Найти</button>
</form>
</div>

<hr>

<?php if($search):?>
<form method="POST" action="userManipulation.php">
<?php foreach($search as $found):?>
<div>
<label><input type="checkbox" value="<?=$found->id?>" name="banbox[]"><a href="/author/workpage/users/tables/?user=<?=$found->id?>"><?=$found->email?></a></label>
</div>

<?php endforeach; ?>
<hr>
С выбранными пользователями:
<button type="submit" name="submit" onclick="return confirm('Пользователи будут добавленны в черный список и не будут иметь доступ к личному кабинету и не будут отображаться в поиске на этой странице. \n \n Вы точно хотите заблокировать этих пользователей? \n')">Заблокировать</button>
</form>
<?php endif; ?>
</div>
</div>






</div>
<script src="/script/dark.js"></script>
<script src="/script/search.js"></script> 
</body>
</html>