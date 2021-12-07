<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>
<?php

$range1 = range(0,11);
$range2 = range(12,17);
$range3 = range(18,35);
$range4 = range(36,65);

$edad=rand(1,150);

switch (true) {
    case in_array($edad, $range1) :
        printf('Tienes %d eres un niño',$edad);
        break;
    case in_array($edad, $range2) :
        printf('Tienes %d eres un adolescente',$edad);
        break;
    case in_array($edad, $range3) :
        printf('Tienes %d eres un joven',$edad);
        break;
    case in_array($edad, $range4) :
        printf('Tienes %d eres un adulto',$edad);
        break;
    default:
    printf('Tienes %d eres un jubilado ',$edad);

print "<br/>";
}

header('refresh:2; url=index.php ');

?>
<a href="index.php">Volver</a>
<p><p>&copy; 2021 Lorena M.</p>
</body>
</html>


