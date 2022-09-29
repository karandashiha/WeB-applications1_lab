<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   // – Приклад PHP-сторінки
   echo "Hi,I php-scenario";
   ?>
   <?
   echo ("<p>This is  also php-scenario!<p>");
   ?>
   <?
   echo ("<p>Материіл лабораторної роботи WeB-технологій,підготував В.В.Гармаш <p>")
   ?>
   <?
   // – Приклад коментарів в РНР
   echo ("<p>Hello</p>"); // comment 
   echo ("<p>Hello</p>"); # also comments
   $a = "hello,world!";
   echo $a; /*
    also comments
   */

   // – Приклад коментарів поза обмежувачами в РНР
   echo ("<p>Hello</p>"); // comment 

   echo ("<p>Hello</p>") // comment 
   ?>
   <?
   echo ("<p>Hello</p>"); /*Якщо PHP зустріне ці ( ?> )символи коментарів поза
   обмежувачами, то вони, як і будь-який текст, з'являться в на html-сторінці*/
   ?>
   <?
   //– Приклад оголошенні змінних в РНР
   $srting = "Математичний приклад";
   $a = 2;
   $b = 3;
   $num = $a + $b;
   echo $srting . ".<br> Сума дорівнює :<p>" . $num;
   ?>

   <form name="name forms" action="*.php" method="get">
      Поля для введення інформації<br>
   </form>

</body>

</html>