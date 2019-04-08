<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "class _.php";
$rectangle =new Rectangle(30,20);
$rectangle->height = 30;
$rectangle->width = 20;
echo $rectangle->getPerimeter()."<br>";
echo $rectangle->getArea()."<br>";
echo ("Your Rectangle". $rectangle->display());
?>
</body>
</html>
