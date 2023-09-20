
<!DOCTYPE html>
<html>
<head>
    <title>Cifrado</title>
    <style>
        

body {
    font-family: Arial, sans-serif;
    text-align: center;
    background-color: #f0f0f0;
}

h1 {
    color: #333;
}

form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

label {
    display: block;
    margin-bottom: 10px;
    color: #333;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    font-size: 16px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>

    
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


