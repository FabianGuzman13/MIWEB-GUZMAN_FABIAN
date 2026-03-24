<?php
$resultado = '';
$tipo = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'] ?? '';
    
    if ($tipo == 'suma') {
        $num1 = $_POST['num1'] ?? 0;
        $num2 = $_POST['num2'] ?? 0;
        $resultado = $num1 + $num2;
    } 
    elseif ($tipo == 'factorial') {
        $n = intval($_POST['numero'] ?? 0);
        if ($n < 0) {
            $resultado = "Error: No puede ser negativo";
        } else {
            $fact = 1;
            for ($i = 2; $i <= $n; $i++) {
                $fact *= $i;
            }
            $resultado = $fact;
        }
    }
    elseif ($tipo == 'fibonacci') {
        $cantidad = intval($_POST['cantidad'] ?? 0);
        if ($cantidad <= 0) {
            $resultado = "Error: Cantidad debe ser mayor a 0";
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
            $resultado = implode(", ", $fib);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>MIWEB GUZMAN_FABIAN</title>
</head>
<body>
    <h1>MIWEB GUZMAN_FABIAN</h1>
    
    <h2>Información del Autor</h2>
    <p><strong>Nombre Completo:</strong> Fabian Enrique Guzman Choque</p>
    <p><strong>Curso:</strong> Desarrollo Web</p>
    
    <hr>
    
    <h2>Calculadoras</h2>
    
    <form method="POST">
        <fieldset>
            <legend>Suma de 2 Números</legend>
            <label>Primer Número:</label>
            <input type="number" name="num1" step="any">
            <br><br>
            <label>Segundo Número:</label>
            <input type="number" name="num2" step="any">
            <br><br>
            <button type="submit" name="tipo" value="suma">Calcular Suma</button>
        </fieldset>
    </form>
    
    <br>
    
    <form method="POST">
        <fieldset>
            <legend>Factorial</legend>
            <label>Número:</label>
            <input type="number" name="numero" min="0">
            <br><br>
            <button type="submit" name="tipo" value="factorial">Calcular Factorial</button>
        </fieldset>
    </form>
    
    <br>
    
    <form method="POST">
        <fieldset>
            <legend>Serie Fibonacci</legend>
            <label>Cantidad de Términos:</label>
            <input type="number" name="cantidad" min="1" max="50">
            <br><br>
            <button type="submit" name="tipo" value="fibonacci">Generar Fibonacci</button>
        </fieldset>
    </form>
    
    <?php
    if ($resultado !== '') {
        echo "<hr>";
        echo "<h2>Resultado:</h2>";
        if ($tipo == 'suma' && is_numeric($resultado)) {
            echo "<p><strong>" . htmlspecialchars($_POST['num1']) . " + " . htmlspecialchars($_POST['num2']) . " = " . htmlspecialchars($resultado) . "</strong></p>";
        }
        elseif ($tipo == 'factorial') {
            echo "<p><strong>" . htmlspecialchars($_POST['numero']) . "! = " . htmlspecialchars($resultado) . "</strong></p>";
        }
        elseif ($tipo == 'fibonacci') {
            echo "<p><strong>" . htmlspecialchars($resultado) . "</strong></p>";
        }
    }
    ?>
</body>
</html>
