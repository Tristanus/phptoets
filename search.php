<?php
	require_once "searchLogic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php Toets</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	
	<table>
		<thead>
		<?php if(isset($_POST["search"])):?>
			<th>Merk</th>
			<th>Maat 38</th>
			<th>Maat 39</th>
			<th>Maat 40</th>
			<th>Maat 41</th>
			<th>Maat 42</th>
			<th>Maat 43</th>
			<th>Maat 44</th>
			<th>Maat 45</th>
			<th>Maat 46</th>
			<th>Maat 47</th>
		</thead>
		<tbody>
			<tr>
			<td><?= $merken[0]["merk"] ?></td>
			<td><?= $merken[0]["maat_38"] ?></td>
			<td><?= $merken[0]["maat_39"] ?></td>
			<td><?= $merken[0]["maat_40"] ?></td>
			<td><?= $merken[0]["maat_41"] ?></td>
			<td><?= $merken[0]["maat_42"] ?></td>
			<td><?= $merken[0]["maat_43"] ?></td>
			<td><?= $merken[0]["maat_44"] ?></td>
			<td><?= $merken[0]["maat_45"] ?></td>
			<td><?= $merken[0]["maat_46"] ?></td>
			<td><?= $merken[0]["maat_47"] ?></td>
			</tr>
		<?php endif; ?>		
		<?php if(isset($_POST["size"])):?>

			<th>Merk</th>
			<th>Maat: <?= $size ?></th>

			</thead>
			<tbody>
				<?php
					foreach ($merken as $merk) {
						echo "<tr>";
						echo "<td>" . $merk["merk"] . "</td>";
						echo "<td>" . $merk[$size] . " exemplaren</td>";
						echo "</tr>";
					}	
				?>
		<?php endif; ?>	
		</tbody>
	</table>

	<a href="index.php"><p>Home</p></a>

</body>
</html>