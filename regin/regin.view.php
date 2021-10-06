<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CloudTower</title>
    <link rel="shortcut icon" href="/img/icon/icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/font.css">
	<link rel="stylesheet" href="/css/switch.css">
	<link rel="stylesheet" href="/css/regin.css">
	<link rel="stylesheet" href="/css/dark.css">
</head>
<body>
<div id="main">

<?php include $_SERVER['DOCUMENT_ROOT']."/template/index/reginHeader.php" ?>

<div class="center">



<div class="regin">
<div class="center"><img src="/img/main/regin2.png" draggable="false"></div>
<hr>

<form id="Form" action="login.php" method="POST">
<div class="inputs">
<label>Email: <span class="dot">*</span></label><input type="email" required name="email" value="<?=$_SESSION['email']?>">
<label>Телефон: </label><input  id="phone" type="text" name="tel" value="<?=$_SESSION['telephone']?>">	
<label>Пароль: <span class="dot">*</span></label><input type="password" required name="password" value="<?=$_SESSION['password']?>">
<label>Дата Рождения: </label><input type="date" name="date" value="<?=$_SESSION['date']?>">
</div>
<button type="submit" id="btnAuth" name="submit">Ok</button>
</form>
<hr>

<p style="display: $_SESSION['errors']['register'] ? 'block':'none';"><?=$_SESSION['errors']['register']?></p>

</div>
</div>
</div>



<script src="/script/dark.js"></script>
<script src="/script/jquery/jquery.js"></script>
<script src="/script/jquery/jquery.maskedinput.min.js"></script>
<script src="/script/jquery/jquery.maskedinput.js"></script>
<script src="/script/telephoneMask.js"></script>
</body>
</html>