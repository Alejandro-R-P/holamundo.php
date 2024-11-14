<!-- array nombre y notas dar 5 valores mostrar juan tiene una nota de 4 y 6 y su media es 5 -->

<?php
// Array asociativo con nombres de estudiantes y sus notas
$estudiantes = array(
    "Juan" => [8, 6, 8, 6, 8],
    "Paco" => [10, 7, 9, 7, 8],
    "Luis" => [6, 8, 7, 8, 3],
    "Beatriz" => [9, 9, 8, 6, 3],
    "Carlos" => [1, 6, 2, 7, 8]
);

// Recorrer el array y mostrar las notas y la media de cada estudiante
foreach ($estudiantes as $nombre => $notas) {
    $media = array_sum($notas) / count($notas);
    
    // escribir notas con comas e "y" antes de la última
    $ultimaNota = array_pop($notas);
    $notasTexto = count($notas) > 0 ? implode(", ", $notas) . " y $ultimaNota" : $ultimaNota;
    
    echo "$nombre tiene una nota de: $notasTexto, la nota media es de " . round($media, 2) . "<br>";
}
?>
