<?php 
if (!isset($_GET['id'])) {
	header('location:index.php');
}
require('components/config.php');
$id = $_GET['id'];
	if (isset($_POST['submit'])){
	$menu_name = $_POST['menu_name'];
	$position = $_POST['position'];
	$visible = $_POST['visible'];
	  $query = "UPDATE subjects SET
            menu_name = '{$menu_name}',
            position = {$position},
            visible = {$visible}
            WHERE id = {$id}";
	$result = mysqli_query($connect, $query);
	
  if ($result) {
    $answer = "Õnnestus";
  } else {
    $answer = "Ebaõnnestus";
  }
}else {
	$query = "SELECT * FROM subjects WHERE id = $id";
	$result = mysqli_query($connect, $query);
	$row = mysqli_fetch_assoc($result);
	$menu_name = $row['menu_name'];
	$position = $row['position'];
	$visible = $row['visible'];
}
?>


<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset= utf-8">
  <title>databases</title>
   </head>
  <body>
  	<pre>

	<?php while($row = mysqli_fetch_assoc($result)) { ?>
		<h1 class="page-title"> <?php echo $row['menu_name']; ?> </h1>
		<a href ="databases-update.php?id=<?php echo $row['id']; ?>">Muuda</a>
		
	<?php } ?>
	<?php mysqli_free_result($result); ?>
	
    </pre>

  </body>

  </html>

  <?php mysqli_close($connect);?>