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
    $user = "user1";
     if(isset($user)){
        echo "Пользователь найден";
     }else{
        echo "Пользователь не найден";
     }
    ?>
    <br>
    <h2>№2</h2>
    <?php
     $str = "";
     if (empty($str)){
        echo "пустая строка";
     }else{
        echo "непустая строка";
     }
    ?>
    <br>
    <h2>№3</h2>
    <?php
      echo gettype(8765);
    ?>
    <br>
    <h2>№4</h2>
    <?php
     echo is_int(5);
    ?>
</body>
</html>