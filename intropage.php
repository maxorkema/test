<!DOCTYPE html>
	<html lang="en">
	<head>
<meta charset="utf-8">
<title> Ля ля</title>
<link href="css/style.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head> 
<body>

	<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:vxod.php");
else:
?>
	
<?php include("includes/header.php"); ?>
<div id="welcome">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
  <p><a href="logout.php">Вийти</a> з системи</p>
</div>
	
<?php include("includes/footer.php"); ?>
	
<?php endif; ?>

<div id="welcome">
 <h2>Добро пожаловать, <span> USER </span></h2>!
	<p><a href="logout.php">Вийти</a> з системи</p>
</div>
</body>
</html>