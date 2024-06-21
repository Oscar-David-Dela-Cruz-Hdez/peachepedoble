<?php
$message = '';
$message_type = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $contra1 = $_POST['contra1'];
    $contra2 = $_POST['contra2'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = 'Correo electrónico no es válido.';
        $message_type = 'danger';
    } elseif ($contra1 !== $contra2) {
        $message = 'Las contraseñas no coinciden.';
        $message_type = 'danger';
    } else {
        $message = 'Identificación correcta.';
        $message_type = 'success';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificación</title>
    <!-- Bootstrap CSS más reciente -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Identificación
                </div>
                <div class="card-body">
                    <?php if(!empty($message)): ?>
                        <div class="alert alert-<?php echo $message_type; ?>"><?php echo $message; ?></div>
                    <?php endif; ?>
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="contra1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contra1" name="contra1" required>
                        </div>
                        <div class="mb-3">
                            <label for="contra2" class="form-label">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="contra2" name="contra2" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Identificar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Bundle con Popper más reciente -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
