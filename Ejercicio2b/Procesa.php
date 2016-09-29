<?php

  //Variables del formulario
  $superior=$_POST['superior'];
  $inferior=$_POST['inferior'];
  $comprobar=$_POST['comprobar'];
 
  //Número aleatorio
  $num_random=  rand($inferior, $superior); //Número aleatorio entre límites establecidos por el usuario
  

?>


<html
    <head>
        <meta charmet="UTF-8">
        <title>Numero aleatorio</title>
    </head>
    <body>
        Número introducido: <?php echo $comprobar?><br><br>
        Número a adivinar: <?php echo $num_random?><br>
        
           <?php
           if ($comprobar==$num_random) //si el numero dado por el usuario es igual que el aleatorio
               echo "Enhorabuena. Has acertado";
           else
           {
               if($comprobar<$comprobar) //Si es menor
               {
                   echo "<br>Los numeros no coinciden."; 
                   echo "<br>Tu número: $comprobar es menor que el generado $num_random";
               }
               else //Si es mayor
               {
                  echo "<br>Los números no coinciden. Inténtalo otra vez";
                  echo "<br>Tu número: $comprobar es mayor que el generado $num_random";
                  
               }
           }
           
           
           ?>
    </body>
    <!--Probando con el master-->
</html>
