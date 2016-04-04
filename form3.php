<?php

include('kcaptcha/kcaptcha.php');
session_start();
require_once("config.php");


if ($_POST['act']== "y")
{
if(isset($_SESSION['captcha_keystring']) && $_SESSION['captcha_keystring'] ==  $_POST['keystring'])
{

if (isset($_POST['posName']) && $_POST['posName'] == "")
{
$statusError = "$errors_name";
}
elseif (isset($_POST['posEmail']) && $_POST['posEmail'] == "")
{
$statusError = "$errors_mailfrom";
}
elseif(isset($_POST['posEmail']) && !preg_match("/^([a-z,._,0-9])+@([a-z,._,0-9])+(.([a-z])+)+$/", $_POST['posEmail']))
{
$statusError = "$errors_incorrect";

unset($_POST['posEmail']);
}
elseif (isset($_POST['posRegard']) && $_POST['posRegard'] == "")
{
$statusError = "$errors_subject";
}
elseif (isset($_POST['posText']) && $_POST['posText'] == "")
{
$statusError = "$errors_message";
}

elseif (!empty($_POST))
{
//заголовок для нас
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: $content  charset=$charset\r\n";
$headers .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
$headers .= "From: \"Заказ с сайта ".$_POST['posName']."\" <".$_POST['posEmail'].">\r\n";
$headers .= "X-Mailer: My Send E-mail\r\n";

//заголовок для заказчика
$headerszakaz  = "MIME-Version: 1.0\r\n";
$headerszakaz .= "Content-Type: $content  charset=$charset\r\n";
$headerszakaz .= "Date: ".date("Y-m-d (H:i:s)",time())."\r\n";
$headerszakaz .= "From: \"Подтверждение заказа\" <".$mailto.">\r\n";
$headerszakaz .= "X-Mailer: My Send E-mail\r\n";

mail("$mailto","$subject","Посетитель сайта отправил заказ: $message","$headers");//отправляем сообщение нам
mail($_POST['posEmail'],"$subject","Ваш заказ получен: $message","$headerszakaz");//отправляем сообщение заказчику

unset($name, $posText, $mailto, $subject, $posRegard, $message);

$statusSuccess = "$send";
}

}else{
$statusError = "$captcha_error";
unset($_SESSION['captcha_keystring']);
}
}
?>

<html>
<head>
<title>Форма заказа</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<link href="styling.css" rel="stylesheet" type="text/css" media='screen,projection' />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
</head>
<body>

<h2>Форма заказа</h2>
<p id="emailSuccess">
<strong style="color:green;"><?php echo "$statusSuccess" ?></strong>
</p>
<p id="emailError"><strong style="color:red;"><?php echo "$statusError" ?></strong></p>

<div id="contactFormArea">
<form action="form3.php" method="post" id="cForm">
<input type="hidden" name="act" value="y" />
<fieldset>
<label for="posName"><b>Ваше имя:</b></label>
<input class="text" type="text" size="25" name="posName" id="posName" />
<label for="posEmail"><b>Ваш E-mail адрес:</b></label>
<input class="text" type="text" size="25" name="posEmail" id="posEmail" />
<label for="posRegard"><b>Ваш телефон:</b></label>
<input class="text" type="text" size="25" name="posRegard" id="posRegard" />
<label for="posText"><b>Напишите, какая услуга или товар Вас интересует:</b></label>
<textarea cols="50" rows="15" name="posText" id="posText"></textarea>
<label for="posCaptcha"><center><b>Текст на изображении (цифры)</b>:</label><a href='readme.html'><img src="kcaptcha?<?php echo session_name()?>=<?php echo session_id()?>" border=0></a></center><input class="text" type="text" size="25" name="keystring" id="keystring" />
<br><br><label><input class="submit" type="submit" name="selfCC" id="selfCC" value=" Отправить " /></label>
</fieldset>
<?php include 'kcaptcha/kcaptcha_rand.php' ?>
</form>
<form action="golovna.php"><label><input class="submit" type="submit" name="selfCC" id="selfCC" value=" <<<------- " /></label></form>
</div>
<div class="kartinka"><img src="images/logotyp.jpg" alt="Dummy" /></div>
</body>
</html>