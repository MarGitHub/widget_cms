<?php
	$dbhost = "localhost";
	$dbuser = "widget_cms"; 
	$dbpass = "tupsununnu123"; 
	$dbname = "widget_corp"; 
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	$query = "SELECT * FROM subjects;"; 
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_row($result);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
	<?php
	
 <article class="page">
  <header class="page-header">
    <h1 class="post-title">// Uudise pealkiri</h1>
  </header>
  <div class="page-body">
    // Postituse sisu
   </div>
</article>
?>
  </body>
</html>

<?php mysqli_close($connection); ?>