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
	<link rel="stylesheet" href="/css/switch.css">
	<link rel="stylesheet" href="/css/dark.css">
</head>
<body>
<div id="main">


<?php include $_SERVER['DOCUMENT_ROOT']."/template/index/userPanel.php" ?>



<div class="main content">


<div class="section">
<section>
<h1>Здравствуй, админ.</h1>
</section>
<hr>
<div class="centeredTables">
<a href="/author/workpage/users/">Посмотреть всех пользователей</a>
</div>

<hr>

<div class="centeredTables">
<a href="/author/workpage/bannedUsers/">Показать заблокированных пользователей</a>
</div>

<hr>

<div class="centeredTables">
<a href="/author/workpage/defaultTableSettings/">Настройки таблиц</a>
</div>

</div>
</div>






</div>
<script src="/script/dark.js"></script>
</body>
</html>