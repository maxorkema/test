
	<?php require_once("includes/connection.php"); ?>
	<?php include("includes/header.php"); ?>	
	<script type="text/javascript" src="main.js"></script> 
	<?php/*
	
	if(isset($_SESSION["session_username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: intropage.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query =mysql_query("SELECT * FROM usertbl WHEREusername='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
 {
while($row=mysql_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {
	// старое место расположения
	//  session_start();
	 $_SESSION['session_username']=$username;	 
 /* Перенаправление браузера */
   /*header("Location: intropage.php");
	}
	} else {
	//  $message = "Invalid username or password!";
	
	echo  "Invalid username or password!";
 }
	} else {
    $message = "All fields are required!";
	}
	}*/
	?>

<div class="container mlogin">
<div id="login">
<h1>Вхід</h1>
<form action="golovna.php" id="loginform" method="post"name="loginform">
<p><label for="user_login">Логін<br>
<input class="input" id="username" name="username" size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password" size="20"
  type="password" value=""></label></p> 
	<p class="submit"><form action="register.php"><input class="button"  name="login" type= "submit" value="Log Inn"></form> </p>
	<p class="regtext">Ще не зареєстровані?<a href= "register.php">Регистрация</a>!</p>
   </form>
 </div>
  </div>
<?php include("includes/footer.php"); ?>
</body>
</html>