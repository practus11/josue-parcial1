<?php
$a = 0;
$b = 0;

for ($i = 0; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $b += $i;
    } else {
        $a += $i;
    }
}

echo "La suma de los números pares en el rango de 0 a 50 es: " . $b . "<br>";
echo "La suma de los números impares en el rango de 0 a 50 es: " . $a . "<br><br>";

?>