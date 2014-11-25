<?php
	$dbhost = "localhost";
	$dbuser = "widget_cms"; 
	$dbpass = "tupsununnu123"; 
	$dbname = "widget_corp"; 
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$query = "SELECT * FROM subjects;"; 
	$result = mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
	<?php
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<h1 class="page-title">' . $row[1] . '</h1>';
	}
	mysqli_free_result($result);
	
?>
  </body>
</html>

<?php mysqli_close($connection); ?>