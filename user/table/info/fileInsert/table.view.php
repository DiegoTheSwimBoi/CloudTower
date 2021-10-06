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
			<form action="insert.php" method="POST" enctype="multipart/form-data">


				<h1>Имя Таблицы: <?=$tableObj->name?></h1>


				<input type="hidden" name="tb" value="<?=$tableObj->name?>">

				<input type="hidden" name="id" value="<?=$tableObj->id?>">

				<div> <input type="file" id="file" name="exl" accept=".xlsx"></div>

				<div>
					<p
						style="display: <?=$_SESSION['errors']['file'] ? 'block':'none'?>; color: <?=$_SESSION['errors']['file'] ? 'red':'green'?>;">
						<?=$_SESSION['errors']['file']?></p>
				</div>

				<button type="submit" name="submit">Ok</button>

			</form>

		</div>
	</div>



	<script src="/script/dark.js"></script>
</body>

</html>