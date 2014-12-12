<?php 
if (!isset($_GET['id'])) {
	header('location:index.php');
}
require('components/config.php');
	$id = $_GET['id'];
	$query = "DELETE FROM subjects WHERE id = {$id}";
	$result = mysqli_query($connect, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Databases</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="refresh" content="2;url=index.php">
</head>
<body>
<?php if ($result) { ?>
  <p style="color: green;"><?php echo "Rida kustutatud"; ?></p>
<?php } else { ?>
  <p style="color: red;"><?php echo "Sellist rida andmebaasis ei ole"; ?></p>
<?php } ?>
<?php
  if ($result && mysqli_affected_rows($connection)) {
  }
?>
<div ><a href="index.php">Tühista</a></div>
</body>
</html>
<?php mysqli_close($connect); ?>