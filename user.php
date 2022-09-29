<!DOCTYPE html>
<html lang="en">

<head>
   <title>Інформація що надіслана за допомогою гіперпосилань</title>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
</head>

<body>
   <?php
   $_name = $_GET['_name'];
   $last_name = $_GET['last_name'];
   $home_phone = $_GET['home_phone'];
   $email = $_GET['email'];

   ?>
   <ul>
      <li>Ім'я: <b><?php echo $_name ?></b></li>
      <li>Прізвище: <b><?php echo $last_name ?></b></li>
      <li>Домашній телефон: <b><?php echo $home_phone ?></b></li>
      <li>Електоронна адреса: <b><?php echo $email ?></b></li>
   </ul>
</body>

</html>