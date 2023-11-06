<?php

$nama = ["Vika", "Dina", "Sila", "Aisyah", "Ria"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Looping for Array</title>
</head>
<body>
	<?php

	foreach ($nama as $absen) { //Foreach akan otomatis menampilkan semua isi array
		echo "<li>$absen</li>";
	}
	?>
</body>
</html>