<!DOCTYPE html>
<html lang="en">

<head>
   <title>Інформація що надіслана за допомогою гіперпосилань</title>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
</head>

<body>
   <?php
   $vuz_name = $_GET['vuz_name'];
   $fac_name = $_GET['fac_name'];
   $course = $_GET['course'];
   ?>
   <ul>
      <li>Назва учбового закладу: <b><?php echo $vuz_name ?></b></li>
      <li>Факультет: <b><?php echo $fac_name ?></b></li>
      <li>Курс: <b><?php echo $course ?></b></li>
   </ul>
</body>

</html>