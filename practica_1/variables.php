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
    
        <h1>Variables en PHP </h1>
        
        <table>
            <tr>
                <th>VALORES ASIGNADOS</th>
                <th>MOSTRANDO VALORES</th>
            </tr>

            <tr>
                <th>
                    <?php
                        
                        $d="decimal";

                        $v=521;

                        print "\$v=$v";
                        print"<br/>";
                    ?>
                </th>

                <th> 
                    <?php
                        printf("Variable $d y su valor es -$v-", decimal);
                        print"<br/>";                                    
                    ?>
                </th>

            </tr>

            <tr>

                <th>
                    <?php

                        $o=octal;

                        $d="decimal";

                        $v=0125;

                        print "\$v=0125";
                        print"<br/>";
                    ?>
                </th>

                <th> 
                    <?php
                        printf("Variable $o, su valor $d es -%d- y en octal %o", $v, $v ,$v );
                        print"<br/>";
                    ?>
                </th>
            </tr>
            <tr>

                <th>
                    <?php

                        $hx="hexadecimal";

                        $d="decimal";

                        $v=0xAbC26;;

                        print "\$v=0xAbC26;";
                        print"<br/>";

                    ?>
                </th>

                <th> 
                    <?php
                        printf("Variable $hx, su valor $d es -%d- y en $hx %x", $v, $v, $v);
                        print"<br/>";
                    ?>
                </th>
            </tr>
            <tr>

                <th>
                    <?php

                        $ba="binaria";

                        $bo="binario";

                        $d="decimal";

                        $v=0b0101;

                        print "\$v=0b0101";
                        print"<br/>";

                    ?>
                </th>

                <th> 
                    <?php
                        printf("Variable $ba, su valor $d es -%d- y en $bo es %b",$v,$v);
                        print"<br/>";
                    ?>
                </th>
            </tr>
        <tr>

            <th>

                <?php
                    
                    $s="String";
                    
                    $v="Cadena de caracteres doble comillas";  

                    print "\$v=\"Cadena de caracteres doble comillas\"";
                    print"<br/>";

                ?>

            </th>

            <th> 
                <?php
                    printf("Variable $s y su valor es -%s-", $v);
                    print"<br/>";
                ?>
            </th>
        </tr>
        <tr>

            <th>
                <?php

                    $s="String";

                    $v='Cadena de caracteres comillas simples"';
        
                    print "\$v='Cadena de caracteres comillas simples'";
                    print"<br/>";
                ?>
            </th>

            <th> 
                <?php

                    printf("Variable $s y su valor es -%s-", $v);
                    print"<br/>";
                ?>
            </th>
        </tr>
        <tr>

            <th>
                <?php

                    $s="String";

                    $v="Esto es el una cadena multilinea simple de dwes02";

                    print "\$v=\"Esto es una cadena <br/>
                    multilinea simple <br/>
                    de dwes02\" <br/>";
                    print"<br/>";
                ?>
            </th>

            <th> 
           
                <?php

                    printf("Variable $s y su valor es -%s-", $v);
                    print"<br/>";
                ?>

            </th>
        </tr>

        <tr>

        <th>
            <?php

                $s="String";

                $v= "Esto es una cadena de caracteres más compleja que la anterior<br/>";
        
                print "\$v=\"<pre> Esto es una cadena de caracteres <br/>
                más compleja <br/>
                que la anterior<br/> </pre>"; 
                print"<br/>";
            ?>
        </th>

        <th> 
            <?php

                printf("Variable $s y su valor es -$v-", $v);
                print"<br/>";
            ?>
        </th>
    </tr>

    <tr>

        <th>
            <?php

                $f="float";

                $nc="notación cientifica";

                $v=1.45985632145789512369875412365;

                print "\$v=1.45985632145789512369875412365";
                print"<br/>";
            ?>
        </th>

        <th> 
            <?php

                printf("Variable $f, su valor es -$v- y en $nc es %e",$v);
                print"<br/>";
            ?>
        </th>
    </tr>
    <tr>

        <th>
            <?php

                $f="float";

                $nc="notación cientifica";

                $v=5648E-3;

                print "\$v=5648E-3;";
                print"<br/>";
            ?>
        </th>

        <th> 
            <?php

                printf("Variable $f, su valor es -$v- y en $nc es %e",$v);
                print"<br/>";
            ?>
        </th>
    </tr>

    <tr>

        <th>
            <?php

                $s=String;

                $v=null;

                print "\$v=null";
                print"<br/>";
            ?>
        </th>

        <th> 
            <?php
                printf("Variable $v ,valor -$v- y en $s es %s", $v);
                print"<br/>";
                //printf("Variable " .gettype($v), " es -- y en $s es $v");
            ?>
        </th>
    </tr>
    <tr>

        <th>
            <?php

                $boo="boolean";

                $s="String";

                $v=true;

                print "\$v=true";
                print"<br/>";
            ?>
        </th>
        <th> 
            <?php

                printf("Variable $boo, valor -$v- y en $s es %s", $v);
                print"<br/>";
            ?>
        </th>
    </tr>
    <tr>

        <th>
            <?php

            $bool1 = true;
            $bool2 = false;
            
            $v=false;

                print "\$v=false";
                print"<br/>";
            ?>
        </th>
        <th> 
            <?php

                printf("Variable $boo, valor -$bool2- y en $s es %s", $v);
                
                print"<br/>";
            ?>
        </th>
    </tr>
</table>

<?php
   header('refresh:5; url=index.php ');
  
?>
 <p><p>&copy; 2021 Lorena M.</p>
</body>
</html>


