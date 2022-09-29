<!DOCTYPE html>
<html lang="en">

<head>
   <title>Гіперпосилання дя надсилання інформації</title>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
</head>

<body>
   <?php
   $_name = $_GET['_name'];
   $last_name = $_GET['last_name'];
   $home_phone = $_GET['home_phone'];
   $email = $_GET['email'];
   $vuz_name = $_GET['vuz_name'];
   $fac_name = $_GET['fac_name'];
   $course = $_GET['course'];
   $hobby = $_GET['hobby'];
   echo "<p><a href=\"user.php?
   &_name=$_name
   &last_name=$last_name
   &home_phone=$home_phone
   &email=$email\">";
   echo "Контакна інформація</a></p>";
   echo "<p><a href=\"user1.php?
   vuz_name=$vuz_name
   &fac_name=$fac_name
   &course=$course\">";
   echo "Інформація про ваш навчальній заклад</a></p>";
   echo "<p><a href=\"user2.php?
   hobby=$hobby\">";
   echo "Ваші захоплення</a></p>";
   ?>
</body>

</html>