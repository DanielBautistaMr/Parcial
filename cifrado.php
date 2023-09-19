
<!DOCTYPE html>
<html>
<head>
    <title>Cifrado</title>
</head>
<body>
    <h1>Cifrado Codigo </h1>
    <form method="post" action="">
        <label for="numero">Ingrese un número de 4 dígitos:</label>
        <input type="text" name="numero" required pattern="\d{4}" minlength="4" maxlength="4" inputmode="numeric"><br><br>

        <input type="submit" value="Cifrar">
    </form>
</body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero = $_POST["numero"];

   
    if (strlen($numero) == 4 && is_numeric($numero)) {
       
        $digito1 = substr($numero, 0, 1);
        $digito2 = substr($numero, 1, 1);
        $digito3 = substr($numero, 2, 1);
        $digito4 = substr($numero, 3, 1);

    
        $digito1 = ($digito1 + 7) % 10;
        $digito2 = ($digito2 + 7) % 10;
        $digito3 = ($digito3 + 7) % 10;
        $digito4 = ($digito4 + 7) % 10;

      
        $temp = $digito1;
        $digito1 = $digito3;
        $digito3 = $temp;

        $temp = $digito2;
        $digito2 = $digito4;
        $digito4 = $temp;

      
        $resultado = $digito1 . $digito2 . $digito3 . $digito4;

    
        echo "Número cifrado con intercambio: $resultado<br>";
    } else {
        echo "Por favor, ingrese un número de exactamente 4 dígitos.<br>";
    }
}
?>
</html>


