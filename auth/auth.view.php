<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CloudTower</title>
    <link rel="shortcut icon" href="/img/icon/icon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/font.css">
	<link rel="stylesheet" href="/css/header.css">
	<link rel="stylesheet" href="/css/switch.css">
	<link rel="stylesheet" href="/css/dark.css">
	<link rel="stylesheet" href="/css/auth.css">
</head>
<body>
<div id="main">
<p style="display: $_SESSION['errors']['auth'] ? 'block':'none'; color: $_SESSION['errors']['auth'] ? 'red':'green';"><?=$_SESSION['errors']['auth']?></p>

<div class="auth">
<div class="form">
<div class="imgAuth">
<a href="/"><img src="/img/logo/logo.png" draggable="false" id="img"></a>
<p class="logoP">CLOUDTOWER</p>
</div>
<form class="border" action="authin.php" method="POST">
<div class="inputs">
<label>E-mail: </label><input type="email" name="email" required>
<label>Пароль: </label><input type="password" name="password" required>
<button type="submit" id="btnAuth" name="submit">Ok</button>
</div>
</form>
</div>

</div>
</div>
</body>
</html>