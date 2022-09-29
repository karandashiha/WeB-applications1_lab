   <!DOCTYPE html>
   <html lang="en">

   <head>
      <title>Document</title>
   </head>

   <body>
      <?php
      echo $string = "Математичний приклад<br><br>";
      $a = $_GET['a'];
      $b = $_GET['b'];
      $sum = $a + $b;
      $riz = $a - $b;
      $dob = $a * $b;
      $dil = $a / $b;
      echo "a=$a,b=$b<br><br>";
      echo "<b>Сума</b>$sum<br>";
      echo "<b>Різниця</b>$riz<br>";
      echo "<b>Доуток</b>$dob<br>";
      echo "<b>Частка</b>$dil<br>";
      ?>
   </body>

   </html>