<?php
function calcularMediaSinCeros($calificaciones) {
    $suma = 0;
    $contador = 0;

    foreach ($calificaciones as $nota) {
        if ($nota != 0) {
            $suma += $nota;
            $contador++;
        }
    }

    return ($contador > 0) ? $suma / $contador : 0;
}

// Ejemplo de uso
$notas = [10, 8, 7, 0, 9, 0, 6];
$media = calcularMediaSinCeros($notas);
echo "La media sin contar los ceros es: " . $media;

?>