<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Serie Fibonacci</title>
</head>
<body>
    <h1>Generador de Serie Fibonacci</h1>
    
    <form method="POST">
        <label>Cantidad de términos:</label>
        <input type="number" name="cantidad" min="1" max="50" required>
        <br><br>
        
        <button type="submit">Generar</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cantidad = intval($_POST['cantidad']);
        
        if ($cantidad <= 0) {
            echo "<h2>Error: Ingresa un número mayor a 0</h2>";
        } else {
            $fib = array();
            $a = 0;
            $b = 1;
            
            for ($i = 0; $i < $cantidad; $i++) {
                $fib[] = $a;
                $temp = $a + $b;
                $a = $b;
                $b = $temp;
            }
            
            echo "<h2>Serie Fibonacci ($cantidad términos):</h2>";
            echo "<p>" . implode(", ", $fib) . "</p>";
        }
    }
    ?>
    
    <br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
