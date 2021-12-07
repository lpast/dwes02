<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title> Probando instrucciones en PHP</title>
    </head>
<body>
    <h1>probando instrucciones en PHP</h1>
    <?php
        //Defino dos variables con mi nombre y apellidos
        $nom="lorena";
        $ap="marco";

        /*Visualizo el texto con echo y print, por ejemplo en mi caso (deben de aparecer las comillas del ejemplo
        // mi nombre es "Manuel" y mi apellido es "Romero"*/
        
            //1)con echo pasando varios argumentos (separadados por coma)
            echo "1. mi nombre es \"$nom\", y mi apellido  \"$ap\"", "</br>";                
            
            //2)con print
            print "2. mi nombre es  \"$nom\" y mi apellido \"$ap\"";
            print "</br>";


            //3,4 y 5)Explica en el fichero diferencias entre echo y print y semejanzas.

            print("3. echo no devuelve nada y genera la salida los parametros que recibe");
            print  "</br>";

            print("4. print puede recibir varios parámetros y aplicarle formato con los especificadores de conversion");
            print "</br>";

            print("5. Ambos son iguales en que no son funciones, por lo tanto no son obligatorios los ()");
            print "</br>";

             //6) Indica Por qué puedes pasar los argumentos sin usar paréntesis
             print("6. Porque no son funciones");
             print "</br>";

             //7) Sintaxis heredoc
             //Asigna a una variable llamada informe un texto de cinco líneas,
             //la etiqueta de finalización es FIN

            $informe = <<<FINAL
            El contenido de informe es: </br>
            es una cadena de caracteres </br>
            que es asignada </br>
            a la variable frase </br>
            y termina con la palabra  </br>
            con la que hemos empezado. </br>
            FINAL;


            //Posteriormente visualizas el texto
            // El contenido de 'informe' es:
            //   ........
            // aquí aparecer el contenido del informe
            // debe de respetarse el número de 5 líneas asignadas previamente"
            //Tener cuidado con que la etiqueta no lleve en esa línea ningún otro carácter (espacios en blanco o tabulacones)

            print("7. $informe=$informe");

            //PROBANDO VARIABLES (del 8 al 19)

            //8) Crea una variable y asígnale un valor

            $v=1002;

            echo("8. \$v=1002, El valor de la variable  \$v  -$v-");
            print ("<br />");

            //9)visualiza el valor de la variable y el tipo que eś

            printf("9. El valor de la variable es $v y es de tipo ".gettype($v)."<br />");
                        
            //Cambia la variable a los siguientes tipos :boolean, float, string y null,  y visualizar su valor y tipo 
                
            //10----boolean

            $v=true;

            printf("10.\$v=$v, valor de la variable -%g-", $v);

            print ("<br />");

            //11.visualizo tipo

            print("11. El valor de la variable es $v y es de tipo ".gettype($v)."<br />");

            //12----float

            $v=8.30;

            printf("12.\$v=$v, valor de la variable -%g-", $v);

            print ("<br />");

            //13.visualizo tipo

            print("13. El valor de la variable es $v y es de tipo ".gettype($v)."<br />");

            //14----string
            
            $v="holaaa";

            printf("14.\$v=$v, valor de la variable -%g-", $v);
             
            print ("<br />");

            //15.visualizo tipo

            print("15. El valor de la variable es $v y es de tipo ".gettype($v)."<br />");

            //16-----null

            $v=null;

            printf("16.\$v=$v, valor de la variable -%g-", $v);
             
            print ("<br />");

            //17.visualizo tipo

            print("17. El valor de la variable es $v y es de tipo ".gettype($v)."<br />");

            //18.Prueba a ver el valor y tipo de una variable no definida previamente

            $v;

            printf("18.\$v, variable no creada previamente su valor -$v=$v-");
             
            print ("<br />");

            //19.visualizo el tipo de variable

            print("19. El tipo de la variable es  ".gettype($v)."<br />");

            //20)Visualiza el código ascii del valor 64 al 122 en carácter usando la función ascii  .. puedes usar la función printf o  bien char() ..*/
            
            print("20. <br />");
                      
            //for ($n=64; $n<1282 $n++){ //iterará $n desde 64 hasta el valor 122
                
             //   print($n=%c);
            //}
            
            //21.Visualiza el contenido de la función time() y explica su valor

           // echo "21.La fecha actual es $fecha_actual";
           //print ("<br />");


            //22.Obtén la fecha actual y visualiza su valor con formato dia-mes-año en número usa la función date() para ello
 
            $fecha_actual =date("d/m/Y H:i:s");
            echo "22. La fecha actual es $fecha_actual"; 
            print ("<br />");

            //23. Obtener los dias transcurridos desde el 1/1/1970 (round() o floor() para redondear
            
           
            
            $fecha_actual =date("d/m/Y");

            $fecha_pasada =date (1/1/1970);
            
            echo "23.Los dias que faltan son "; 

            echo date(1/1/1970,strtotime("$fecha_actual")), "<br/>";
            
            print ("<br />");

            echo date('d-m-Y',strtotime("+1 day")), "<br/>";

            //24. Obtener las horas transcurridos desde el 1/1/1970 (round() o floor() para redondear
            print ("<br />");

             //25. Obtener los minutos transcurridos desde el 1/1/1970 (round() o floor() para redondear
             print ("<br />");


            //Usando la función setlocale(...) y strftime(...)

            //Puede ser que tengas que habilitar el idioma en el sistema con locale-gen
            //26)  Obtén la fecha actual con formato por ejemplo domingo, 28 de octubre de 2018
            
            $fecha_actual =date("d/m/Y ");
            $fecha_pasada=date("01/01/1970");
            date_default_timezone_set('Europe/Madrid');
            $tiempo = strtotime($fecha_pasada);
           
        

            
            print ("<br />");

          



            //27)  Ahora con formato en inglés  Sunday, 28 October 2018
            print ("<br />");


            //28) y con formato en francés  dimanche, 28 octobre 2018
            print ("<br />");

            
            // 29)Asigna a una variable la fecha de tu cumpleaños
            //30)Realiza una operación y obtén tu edad en años, meses y días (valor entero).
            // tienes 23 años, 10 meses y 4 días
            //31-32)Asigna a una variable una fecha de 30/10/1969 (mira las funciones strtotime() o bien mktime() para ello
            // Obtén su edad en años, en meses y luego en días siempre redondeando
            // tienes xx años
            // tienes xx meses
            // tienes xx días
 
 
//33-36). Usa la función getdate(...) y visualiza con la función print_r(.) el valor que retorna, comenta el resultado
//. Si escribo getdate(1) podrías explicar el contenido del array que nos retorna
//. Obtener la edad de una persona nacida el 1/1/1969
//37-64)Explica el siguiente código observando el resultado que se produce fuente obtenido en parte de http://php.net/manual/es/function.strtotime.php
echo "<hr>";
echo strtotime("now"), "<br/>";
echo date('d-m-Y', strtotime("now")), "<br/>";
echo strtotime("27 September 1970"), "<br/>";
echo date('d-m-Y',strtotime("10 September 2000")), "<br/>";
echo strtotime("+1 day"), "<br/>";
echo date('d-m-Y',strtotime("+1 day")), "<br/>";
echo strtotime("+1 week"), "<br/>";
echo date('d-m-Y',strtotime("+1 week")), "<br/>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br/>";
echo date('d-m-Y',strtotime("+1 week 2 days 4 hours 2 seconds")), "<br/>";
echo strtotime("next Thursday"), "<br/>";
echo date('d-m-Y',strtotime("next Thursday")), "<br/>";
echo strtotime("last Monday"), "<br/>";
echo date('d-m-Y',strtotime("last Monday")), "<br/>";
echo "<hr>";


           




         ?>
 
</body>
</html>