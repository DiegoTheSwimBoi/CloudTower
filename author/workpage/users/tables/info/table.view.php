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
	<table border="2">
		<tr style="background: #cccccc;">
		
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
		
			<?php $dat=$dataTable->getContentByIDs($id,$i)?>
			<?php foreach($dat as $d): ?>
			<td style="padding: 20px;"><?=$d->content?>
				<input type="hidden" name="row[]" value="<?=$d->content?>">
			</td>
			<?php endforeach; ?>
			
		</tr>
		<?php endfor; ?>
       


	</table>
	</div>
	</div>





	<script src="/script/dark.js"></script>
</body>

</html>