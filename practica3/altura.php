<?php
$altura = $_POST["altura"];
$edad = (int)$_POST["edad"];

// Función de validación de altura en PHP
function validarAlturaPHP($altura) {
    $alturaNum = floatval($altura);

    if (!is_numeric($alturaNum)) {
        return false;
    }

    if ($alturaNum >= 1000) {
        return false;
    }

    if (strpos($altura, '.') !== false) {
        return $alturaNum;
    } else {
        $metros = $alturaNum / 100;
        return floatval(number_format($metros, 2));
    }
}

$alturaValidada = validarAlturaPHP($altura);

if ($edad >= 18 && $alturaValidada >= 1.20) {
    echo '<img src="ticket.jpg" style="width: 200px; height: auto;">';
} else {
    echo "No puede ingresar";
}
?>
