<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trabajo Práctico 1</title>
  </head>
  <body>
    <h3>Realizar los siguientes ejercicios:</h3>
    <ol>
      <li>Imprima por pantalla: “Hola mundo”.</li>
      <?php
      echo "Hola mundo";
       ?>
       <br><hr>
      <li>Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</li>
      <?php
      $mensaje = "Hola mundo";
      echo $mensaje;
       ?>
       <br><hr>
      <li>Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división entera y el resto de la división entera.</li>
      <?php
      $variable1 = 10;
      $variable2 = 5;
      $suma = $variable1 + $variable2;
      echo "la suma de ambos numeros es: ", $suma;
       ?>
       <br>
      <?php
       $resta = $variable1 - $variable2;
       echo "la resta de ambos numeros es: ", $resta;
      ?>
      <br>
      <?php
        $multiplicacion = $variable1 * $variable2;
        echo "la multiplicacion de ambos numeros es: ", $multiplicacion;
      ?>
      <br>
      <?php
      $division = $variable1 / $variable2;
      echo "la division de ambos numeros es: ", $division;
       ?>
       <br>
       <?php
       $resto = $variable1 % $variable2;
       echo "el resto de ambos numeros es: ", $resto;
        ?>
        <br><hr>
      <li>Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.</li>
      <?php
      $grados_a_convertir = 20;
      $grados_f = $grados_a_convertir * 1.8 + 32;
      echo $grados_f,"° Fahrenheit";
       ?>
       <br><hr>
      <li>Implementar algoritmos que permitan:</li>
      <ol>
        <li>Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</li>
        <?php
        $base = 18;
        $altura = 12;
        $perimetro = $base * 2 + $altura * 2;
        $area = $base * $altura;
        echo "el perimetro del rectangulo es: ", $perimetro, " cm.";
        ?>
        <br>
        <?php
        echo "el area del rectangulo es: ", $area, " cm.";
         ?>
         <br><br>
        <li>Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</li>
        <?php
        $pi = 3.141592;
        $radio = 30;
        $perimetro_circulo = 2 * $pi * $radio;
        $area_circulo = $pi * $radio**2;
        echo "el perimetro del circulo es: ", $perimetro_circulo, " cm.";
        ?>
        <br>
        <?php
        echo "el area del circulo es: ", $area_circulo, " cm.";
         ?>
      </ol>
      <br><hr>
    </ol>
  </body>
