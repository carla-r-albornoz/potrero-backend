<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras de Control</title>
</head>
<body>
  <h3>Ejercicio 1:</h3>
  <p>Mostrar los números del 1 al 100.</p>
    <?php
        for ($i = 1; $i <= 100; $i++) {
            echo $i . ", ";
        }
    ?>
    <br><hr>
    <h3>Ejercicio 2:</h3>
    <p>Mostrar los números del 100 al 1.</p>
    <?php
        for ($i = 100; $i >= 1; $i--) {
            echo $i . ", ";
        }
    ?>
    <br><hr>
    <h3>Ejercicio 3:</h3>
    <p>Mostrar los números pares del 1 al 100.</p>
    <?php
        for ($i = 2;$i <= 100; $i+=2) {
            echo $i . ", ";
        }
    ?>
    <br><hr>
    <h3>Ejercicio 4:</h3>
    <p>Mostrar los números impares del 1 al 100.</p>
    <?php
        for ($i = 1;$i <= 100; $i+=2) {
            echo $i . ", ";
        }
    ?>
    <br><hr>
    <h3>Ejercicio 5:</h3>
    <p>Mostrar la suma de los números de 1 a 20.</p>
    <?php
        $i = 1;
        $n = 0;
        echo "La suma acumulada es:";
        while ($i <= 20) {
            $n +=$i;
            print "<p>$i > $n</p>";
            $i++;
        }
    ?>
    <br><hr>
    <h3>Ejercicio 6:</h3>
    <p>Mostrar la suma de los números pares de 1 a 20.</p>
    <?php
        $i = 1;
        $n = 0;
        echo "La suma acumulada es:";
        while ($i <= 20 && $i % 2 == 0) {
            $n +=$i;
            print "<p>$i > $n</p>";
            $i+=2;
        }
    ?>
    <br><hr>
</body>
</html>
