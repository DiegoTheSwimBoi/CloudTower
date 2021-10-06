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
	<link rel="stylesheet" href="/css/userPanel.css">
</head>

<body>
	<div id="main">

		<?php include $_SERVER['DOCUMENT_ROOT']."/template/index/userHeader.php" ?>

		<div class="usercontent">
			<form action="editContent.php" method="POST">

				<div class="section">
					<section>
						<h2 style="font-family:Ubuntu;"><?=$tableObj->name?></h2>
					</section>
				</div>
		</div>
		<hr>


		<input type="hidden" name="tb" value="<?=$tableObj->name?>">

		<input type="hidden" name="id" value="<?=$tableObj->id?>">

	</div>

	<div id="main">
	<div class="section centeredTables">
	<table border="2" style="table-layout: fixed;">
		<tr style="background: #cccccc;">
		<th>#</th>
			<?php if($rows):?>
			<?php foreach($rows as $row): ?>
			<th > <?=$row->name?>
				<input type="hidden" name="column[]" value="<?=$row->name?>">
			</th>
			<?php endforeach; ?>
			<?php endif;?>
			
			
			
		</tr>
		<?php for ($i=1; $i < count($ConRows)+1; $i++):?>
		<tr>
		<td style="padding: 20px;"><input type="checkbox" value="<?=$i?>" name="index[]"></td>
			<?php $dat=$dataTable->getContentByIDs($id,$i)?>
			<?php foreach($dat as $d): ?>
			<td>
			<textarea style=" font-size: 16px; resize: none; border: none;"  rows="5" cols="15"   <?=($d->type_id==5)?"readonly":""?>  name="data[]">
			<?=$d->content?>
			</textarea>
			
            <input type="hidden" value="<?=$d->id?>" name="rowID[]">

			</td>
			<?php endforeach; ?>
			
		</tr>
		<?php endfor; ?>
       


	</table>
	</div>
	</div>


    <button type="submit" name="delRows">Удалить выделенные строки</button>
	<button type="submit" name="editRows">Отредактировать</button>

	</form>


	<script src="/script/dark.js"></script>
</body>

</html>