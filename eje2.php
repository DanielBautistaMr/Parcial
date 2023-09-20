<!DOCTYPE html>
<html>
<head>
<style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        
    }
    h1 {
        color: #333;
    }
    label {
        font-weight: bold;
    }
</style>
<title>Calculadora de Edades</title>
<script>
    function generarCampos() {
        var cantidadPersonas = document.getElementById("cantidadPersonas").value;
        var container = document.getElementById("edadesContainer");

        while (container.firstChild) {
            container.removeChild(container.firstChild);
        }

        for (var i = 0; i < cantidadPersonas; i++) {
            var input = document.createElement("input");
            input.type = "number";
            input.name = "edades[]";
            input.placeholder = "persona " + (i + 1);
            container.appendChild(input);
        }
    }
</script>
</head>
<body>
<h1>Calculadora de Edades</h1>

<label for="cantidadPersonas">Ingrese la cantidad de personas que asistieron:</label>
<input type="number" id="cantidadPersonas">
<button onclick="generarCampos()">Generar Campos</button>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div id="edadesContainer">
    </div>
    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["edades"])) {
    $edades = $_POST["edades"];
    $totalPersonas = count($edades);

    if ($totalPersonas > 0) {
        $sumaEdades = array_sum($edades);
        $promedioEdades = $sumaEdades / $totalPersonas;
        $edadMasJoven = min($edades);
        echo "<br>";
        echo "Edades ingresadas: " . implode(", ", $edades) . "<br>";

        echo "<h2>Resultados</h2>";
        echo "Total de personas asistieron a la fiesta: $totalPersonas<br>";
        echo "Promedio de edades: $promedioEdades<br>";
        echo "Edad de la persona más joven que asistió: $edadMasJoven años<br>";

    }
}
?>
</body>
</html>

