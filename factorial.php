<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calcular Factorial</title>
</head>
<body>
    <h1>Calculadora de Factorial</h1>
    
    <form method="POST">
        <label>Número:</label>
        <input type="number" name="numero" min="0" required>
        <br><br>
        
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $n = intval($_POST['numero']);
        
        if ($n < 0) {
            echo "<h2>Error: El número no puede ser negativo</h2>";
        } else {
            $resultado = 1;
            for ($i = 2; $i <= $n; $i++) {
                $resultado *= $i;
            }
            echo "<h2>Resultado: $n! = $resultado</h2>";
        }
    }
    ?>
    
    <br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
