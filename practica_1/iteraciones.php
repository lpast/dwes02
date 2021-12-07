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
    
        <h1>Iteraciones  en PHP </h1>
<?php

$cont=0;

$sumador=0;

$i=0;

do{
    $i++;

    if($i%2==0){

        $sumador+=$i;

        $cont++;
    }


}
while(

    $cont<=100

);

printf("%d", $sumador);


header('refresh:2; url=index.php ');

?>

</div>
<a href="index.php">Volver</a>
<p><p>&copy; 2021 Lorena M.</p>
</body>
</html>
