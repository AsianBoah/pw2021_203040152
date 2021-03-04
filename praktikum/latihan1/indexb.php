<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1b</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
		<?php 
	$i = 1;
	$x = 1;
?>
		<tr>
			<th></th>
			<?php for($i; $i <= 5; $i++) : ?>
				<th>Kolom <?= $i; ?></th>
			<?php endfor; ?>
		</tr>
		<?php for($x = 1; $x <= 5; $x++) : ?>
		<tr>
			<th>Baris <?= $x; ?></th>
			<?php for($i = 1; $i <= 5; $i++) : ?>
				<td><?= "Baris $x, Kolom $i" ?></td>
			<?php endfor; ?>
		</tr>
	<?php endfor; ?>
</table>

</body>
</html>