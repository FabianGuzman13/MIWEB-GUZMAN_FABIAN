<!DOCTYPE html>
<html>
<head>
    <title>Serie Fibonacci</title>
</head>
<body>
    <h1>Generador de Serie Fibonacci</h1>

    <form onsubmit="generarFibonacci(event)">
        <label>Cantidad de términos:</label>
        <input type="number" id="cantidad" min="1" max="50" required>
        <br><br>

        <button type="submit">Generar Fibonacci</button>
    </form>

    <div id="resultado"></div>

    <br>
    <a href="index.php">Volver al inicio</a>

    <script>
        function generarFibonacci(event) {
            event.preventDefault();
            var cantidad = parseInt(document.getElementById("cantidad").value);

            if (cantidad <= 0) {
                document.getElementById("resultado").innerHTML = "<h2>Error: Cantidad debe ser mayor a 0</h2>";
                return;
            }

            var fib = [];
            var a = 0;
            var b = 1;

            for (var i = 0; i < cantidad; i++) {
                fib.push(a);
                var temp = a + b;
                a = b;
                b = temp;
            }

            document.getElementById("resultado").innerHTML = "<h2>Serie Fibonacci (" + cantidad + " términos):</h2><p>" + fib.join(", ") + "</p>";
        }
    </script>
</body>
</html>