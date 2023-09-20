<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
<style>
    

body {
    font-family: Arial, sans-serif;
    background-color: rgb(255, 255, 255);
    margin: 0;
    padding: 0;
}

h1 {

color: rgb(255, 0, 0);
padding: 10px;
text-align: center;
}

form {
max-width: 400px;
margin: 20px auto;
background-color: #c0c0c0;
padding: 20px;
border-radius: 5px;
}

label {
font-weight: bold;
}



input[type="submit"] {
background-color: #f04242;
color: white;
padding: 10px 20px;
}

p {
text-align: center;

}

</style>
</head>

<body>
<h1>Programa Primos para Curiosito </h1>
<form action="primos.php" method="post">
    Escribe tu numero curiosito, y obtendras los numeros primos menos que este y que empiecen por 1:
    <br>
<input type="int" name="Num" ">
<br> <br>
<input type="submit" name="envio" value="Enviar">
</form>


<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = isset($_POST["Num"]) ? intval($_POST["Num"]) : 0;

    if ($num <= 1) {
        echo "<p>Ingresa un número mayor que 1.</p>";
 
    } 
    elseif($num<=10){
        echo "<p>No hay ningun numero primo que empiece por 1</p>";
    }
    else {
        echo "<p>Números primos menores que $num y que empiezan por 1:</p>";

  
        function esPrimo($numero) {
            if ($numero <= 1) {
                return false;
            }
            if ($numero <= 3) {
                return true;
            }
            if ($numero % 2 == 0 || $numero % 3 == 0) {
                return false;
            }
            $i = 5;
            while ($i * $i <= $numero) {
                if ($numero % $i == 0 || $numero % ($i + 2) == 0) {
                    return false;
                }
                $i += 6;
            }
            return true;
            
        }
        $contador = 0;
        for ($i = 10; $i <= $num; $i++) {
            if (esPrimo($i) && substr($i, 0, 1) == '1') {
                echo "<p>$i</p> ";
                $contador++;

            }
        }
        echo "<p>Total de números primos que comienzan con '1':</p>";
        echo "<p>$contador</p>";
    }
}

?>
</body>
</html>





