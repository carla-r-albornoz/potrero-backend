<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Trabajo Práctico 2</title>
  </head>
  <body>
  <h3>Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios:</h3>
  <ol>
    <li>Crear una variable <b>n</b> y validar que sea un número positivo.</li>
    <?php
    $num1 = 16;

    if ($num1 > 0) {
      echo $num1, " es número positivo.";
    }
     ?>
     <br><hr>
    <li>Crear una variable <b>n</b> y validar que sea un número mayor a 1 y menor a 10.</li>
    <?php
    $num2 = 7;

    if ($num2 > 1 && $num2 < 10) {
      echo "el número $num2 es mayor a 1 y menor a 10.";
    }
     ?>
     <br><hr>
    <li>Crear una variable <b>n</b> y validar que sea un número mayor a 10 o menor a 2.</li>
    <?php
    $num3 = 13;

    if ($num3 > 10 || $num3 < 2) {
      echo "el número $num3 es mayor a 10 o menor a 2.";
    }
     ?>
     <br><hr>
    <li>Crear dos variables, una con nombre <b>numero1</b> y otra con el nombre de <b>numero2</b>.
      Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta.
      Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división.
      Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”</li>
      <?php
      $numero1 = 7;
      $numero2 = 4;
      $suma = $numero1 + $numero2;
      $resta = $numero1 - $numero2;
      $multiplicacion = $numero1 * $numero2;
      $division = $numero1 / $numero2;
      $resto = $numero1 % $numero2;

      if ($numero1 > $numero2) {
        echo "$numero1 + $numero2 = $suma";
        echo "<br>";
        echo "$numero1 - $numero2 = $resta";
      }elseif ($numero1 < $numero2) {
        echo "$numero1 * $numero2 = $multiplicacion";
        echo "<br>";
        echo "$numero1 / $numero2 = $division";
        echo "<br>";
        echo "$numero1 % $numero2 = $resto";
        echo "<br>";
      }else {
        echo "Los números ingresados son iguales.";
      }
       ?>
       <br><hr>
  </ol>
  </body>
</html>
