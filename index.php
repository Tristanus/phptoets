<?php
	require_once "db.php";	
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
			<?php

				foreach ($merken as $merk) {

					echo "<tr>";
					echo "<td>" . $merk["merk"] . "</td>";
					echo "<td>" . $merk["maat_38"] . "</td>";
					echo "<td>" . $merk["maat_39"] . "</td>";
					echo "<td>" . $merk["maat_40"] . "</td>";
					echo "<td>" . $merk["maat_41"] . "</td>";
					echo "<td>" . $merk["maat_42"] . "</td>";
					echo "<td>" . $merk["maat_43"] . "</td>";
					echo "<td>" . $merk["maat_44"] . "</td>";
					echo "<td>" . $merk["maat_45"] . "</td>";
					echo "<td>" . $merk["maat_46"] . "</td>";
					echo "<td>" . $merk["maat_47"] . "</td>";
					echo "</tr>";
				}

			?>
			
			<form action="search.php" method="post">
				<input type="text" name="search"/>
				<input type="submit" name="submit" value="search"/>
			</form>

			<form action="search.php" method="post">
				<select name="size">
				    <option value="maat_38">38</option>
				    <option value="maat_39">39</option>
				    <option value="maat_40">40</option>
				    <option value="maat_41">41</option>
				    <option value="maat_42">42</option>
				    <option value="maat_43">43</option>
				    <option value="maat_44">44</option>
				    <option value="maat_45">45</option>
				    <option value="maat_46">46</option>
				    <option value="maat_47">47</option>
				    <option value="maat_48">48</option>
				</select>
				<input type="submit" name="submit" value="search"/>
			</form>

			<a href="create.php"><p>Voeg nieuw merk toe</p></a>

		</tbody>
	</table>

</body>
</html>