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

    <div class="solucion">
    
        <h1>Operador ternario  en PHP </h1>
<?php

$a=rand(1,1000);

printf("%d Es %s <br/>",$a, $a%2==0?"par":"impar" );

//header('refresh:2; url=index.php ');


?>

<a href="ternario.php">Probar otro número</a> <br/>
<a href="index.php">Volver</a>
<p><p>&copy; 2021 Lorena M.</p>

</body>
</html>
