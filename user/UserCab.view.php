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
<div class="content firstSlide">
<div class="user"><img src="../img/main/forthSlide.png" draggable="false"></div>
</div>


<form action="toDo.php" method="post">

<div class="section">
<section>
<h1>Таблицы</h1>
</section>
<hr>
<div class="centeredTables">
<div class="table">


<?php if(!empty($tables)):?>
<?php foreach($tables as $table):?>
<div><label><input type="checkbox" name="TODO[]" value="<?= $table->id?>"><span><a href="/user/table/info/?table=<?= $table->id?>"><?= $table->name?></a></span></label><input type="hidden" name="ID" value="<?=$table->id?>" ><span><button type="submit" style="background: none; border:none;" name="editTable"><img src="/img/icon/edit.png" draggable="false"></button></span><button type="submit" onclick="return confirm('Вы действительно хотите удалить таблицу?');" style="color:red; font-size: 20px; border: none; background: none;" name="delOne">&#10060;</button></div>
<?php endforeach;?>
<?php endif;?>

<?php if(count($tables)<$maxTables):?>
<div><a href="/user/table/add/">Создать таблицу</a></div>
<?php endif;?>



</div>
</div>
<hr>


<div class="control">
<div><p>С выбранными таблицами:  <label class="controlitem"><button style="color:red; font-size: 20px; border: none; background: none;"  name="deleteAll">&#10060;</button><a href="/user/table/hash/" style="font-size: 20px; border: none; background: none;" >&#128272;</a><a  href="/user/table/add/" style="color: #16dd00; font-size: 36px; border: none; background: none;">+</a></label></p></div><div><span style="color: #bababa;"><?=count($tables)?> / <?=$maxTables?></span></div>
</div>

</div>
</div>

</form>

<div class="menu">
<ul type="none">
<li>Как создать таблицу?</li>
<li>Как подготовить таблицы к хешированию?</li>
<li>Как обойти лимит?</li>
</ul>
</div>




</div>
<script src="/script/dark.js"></script>
</body>
</html>