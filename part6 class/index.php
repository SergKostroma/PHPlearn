<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    require 'point.php';
    $point1 = new Point;
    $point1->x = 21;
    $point1->y = 2;
    echo $point1->x . ";";

    $point2 = new Point;
    $point2->x = 5;
    $point2->y = 20;
    echo $point2->y;
    
    //удаление объекта
    unset($point2);
    //проверка не выдаст ничего
    echo $point2->y;
  ?>
</body>
</html>