<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>№1</h2>
    <?php
        $num = "454qwe";
        echo $num - 15;
    ?>
    <br>
    <h2>№2</h2>
    <?php
    $float = 9.1;
    $number = (int)$float;
    echo $number;
    ?>
    <br>
    <h2>№3</h2>
    <?php
     $a = 97;
     $b = (float)($a/2) - (int)($a/2);
     if($b){
        echo "число нечётное";
     } 
     else{
        echo "число чётное";
     }
    ?>
    <br>
    <h2>№4 Округление</h2>
    <?php
    $c = 23.56948484686;
    $d = round($c,2);
    echo $d . ';   ';
    $e = ceil($c);
    echo $e . ';  ';
    $f = floor($c);
    echo $f; 
    ?> 

</body>
</html>