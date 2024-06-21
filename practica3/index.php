<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Oscar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="altura.php" method="post" id="myForm">
        <label for="altura">Ingresa tu altura:</label>
        <input type="text" id="altura" name="altura" required>
        <br><br>
        <label for="edad">Ingresa tu edad:</label>
        <input type="text" id="edad" name="edad" required>
        <br><br>
        <label>¿Acepta no llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</label><br>
        <input type="radio" id="si" name="aceptacion" value="si" required>
        <label for="si">Sí</label><br>
        <input type="radio" id="no" name="aceptacion" value="no">
        <label for="no">No</label><br>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <script src="validacionAca.js"></script>
</body>
</html>
