<?php
// download.php
$grupo = $_GET['grupo'] ?? null;

// Definir los enlaces según el grupo
$links = [
    '1' => 'https://bit.ly/4lq2Z2M',
    '2' => 'https://bit.ly/enlace-grupo2',
    '3' => 'https://bit.ly/enlace-grupo3'
];

if ($grupo && isset($links[$grupo])) {
    header("Location: " . $links[$grupo]);
    exit;
} else {
    echo "No tienes acceso a ningún archivo.";
}
?>
