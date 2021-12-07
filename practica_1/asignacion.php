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
    
        <h1>Asignaciones en PHP </h1>
        
        <table>
            <tr>
                <th>EXPRESION ASIGNADA</th>
                <th>VALOR DE LA EXPRESIÓN</th>
            </tr>

            <tr>
                <th>
                    <?php
                        $a=10;

                        print "\$a=$a";

                    ?>
                </th>

                <th> 
                    <?php
                        printf("-$a-"."<br/>");
                        printf(" La procedencia del valor es una constante numerica. <br/>");          
                        print"<br/>";
                    
                    ?>
                </th>

            </tr>

            <tr>
                <th>
                    <?php
                        $a="hola caracola";

                        print "\$a=$a";

                    ?>
                </th>

                <th> 
                    <?php
                        printf("-$a-"."<br/>");
                        printf(" La procedencia del valor es una constante string. <br/>");          
                        print"<br/>";
                    
                    ?>
                </th>

            </tr>

            <tr>

                <th>
                    <?php
                        $a=4+4;

                        print "\$a=4+4";


                    ?>
                </th>

                <th> 
                    <?php
                        printf("-$a-"."<br/>");

                        printf(" La procedencia del valor es una es una expresion aritmetica. <br/>");
            
                        print"<br/>";
                    
                    ?>
                </th>
            </tr>
            <tr>

                <th>
                    <?php
                        $a=rand(4,6);

                        print "\$a=rand(4,6)";

                    ?>
                </th>

                <th> 
                    <?php
                        printf("-$a-"."<br/>");

                        printf(" La procedencia del valor es una es una invocación a función. <br/>");
            
                        print"<br/>";
                    
                    ?>
                </th>
            </tr>
            <tr>

                <th>
                    <?php
                        $a="me llamo Lorena";

                        print "$a=$a";

                    ?>
                </th>

                <th> 
                    <?php
                        printf("-$a-"."<br/>");

                        printf(" La procedencia del valor es una cadena de caracteres. <br/>");
            
                        print"<br/>";
                    
                    ?>
                </th>
            </tr>
        <tr>

            <th>

                <?php
        
                    $a=0xAbC12;

                    print "\$a=0xAbC12";

                ?>

             </th>

        <th> 
            <?php
                 printf("-$a-"."<br/>");

                printf(" La procedencia del valor es una constante hexadecimal. <br/>");

                print"<br/>";
            
            ?>
        </th>
    </tr>
    <tr>

        <th>
            <?php

                $a=0b1100;
        
                print "\$a=0b1100"; 

            ?>
        </th>

        <th> 
            <?php

                printf("-$a-"."<br/>");

                printf(" La procedencia del valor es una constante numérica con valor binario. <br/>");

                print"<br/>";
    
            ?>
        </th>
    </tr>
    <tr>

        <th>
            <?php

                $a=4*44/5;

                print "\$a=4*44/5";

            ?>
        </th>

        <th> 
           
            <?php

                printf("-$a-"."<br/>");
                printf(" La procedencia del valor es una es expresion numerica. <br/>");
                print"<br/>";
    
            ?>
        </th>
    </tr>

    <tr>

        <th>
            <?php

                $a=print("hola caracola");
        
                print $a=$a; 

            ?>
        </th>

        <th> 
            <?php

            printf("-$a-"."<br/>");
            printf(" La procedencia del valor es una invocación a función. <br/>");
            print"<br/>";
    
            ?>
        </th>
    </tr>
    <tr>

    <th>
        <?php

            $a=0b1100;

            print "\$a=0b1100"; 

        ?>
    </th>

    <th> 
        <?php

        printf("-$a-"."<br/>");
        printf(" La procedencia del valor es una expreson de asignacion <br/>");
        print"<br/>";

        ?>
    </th>
    </tr>
</table>
</div>

    <?php
        header('refresh:5; url=index.php ');
    ?>
    <a href="index.php">Volver</a>
    <p><p>&copy; 2021 Lorena M.</p>
    </body>
</html>

