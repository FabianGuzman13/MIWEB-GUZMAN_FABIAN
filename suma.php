<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calcular Suma</title>
</head>
<body>
    <h1>Calculadora de Suma</h1>
    
    <form method="POST">
        <label>Primer Número:</label>
        <input type="number" name="num1" step="any" required>
        <br><br>
        
        <label>Segundo Número:</label>
        <input type="number" name="num2" step="any" required>
        <br><br>
        
        <button type="submit">Calcular</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $suma = $num1 + $num2;
        
        echo "<h2>Resultado: $num1 + $num2 = $suma</h2>";
    }
    ?>
    
    <br>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
