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

<div class="usersection">
<form action="addAvatar.php" method="POST" enctype="multipart/form-data">
<div><label><img src="<?=$avatar?><?=$user->avatar?>"  height="250" width="250" style="border-radius: 50%; background-position: inherit; border: 5px double #bcbcbc;" draggable="false"><input type="file" style="display: none;" accept=".jpg, .jpeg, .png"  name="avatar"></label><button type="submit" name="addAvatar">Ok</button></div>
</div>
</form>
<div class="yourAccount">
<p>Email: <?=$user->email?></p>
<p>Телефон: <?=$user->telephone?></p>
</div>
</div>

<hr>

<script src="/script/dark.js"></script>
</body>
</html>