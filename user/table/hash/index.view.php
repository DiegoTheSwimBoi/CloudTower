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
<h1>Таблицы</h1>
</section>
<hr>
<div class="centeredTables">
<div class="table">


<?php if(!empty($tables)):?>
<?php foreach($tables as $table):?>
<div><label><input type="checkbox" name="TODO[]" value="<?= $table->id?>"><span><?= $table->name?></span></label><input type="hidden" name="ID" value="<?=$table->id?>" ><span>0.99$</span></div>
<?php endforeach;?>
<?php endif;?>
</div>
</div>
<hr>

<div style="display: flex;flex-direction: row;justify-content: space-evenly; margin: 5px; padding:20px;" ><div><label>Итого: <?=count($tables)*0.99?>$ </label><label><button>Зашифровать и перейти к оплате</button></label></div></div>
</div>
</div>
</div>



<script src="/script/dark.js"></script>
</body>
</html>