<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llenando Piscinas</title>
    <style>
        *{
            font-family: Arial, sans-serif;

        }
        body {
            text-align: center;
        }

        form button {
            text-align: center;
            margin: 20px;

        }
        
    </style>
    
    
</head>
<body>
    <form action="" method="post">
        <h1>YO :p</h1>
        <p>Digitar litro de Piscina</p>
        <input type="number" name="mi_litro_piscina"><br>
        <p>Digitar litro de balde</p>
        <input type="number" name="mi_litro_balde"><br>
        <p>Digitar litro de pérdida</p>
        <input type="number" name="mi_litro_perdida">

        <h1>EL VECINO >:I</h1>
        <p>Digitar litro de Piscina</p>
        <input type="number" name="vecino_litro_piscina"><br>
        <p>Digitar litro de balde</p>
        <input type="number" name="vecino_litro_balde"><br>
        <p>Digitar litro de pérdida</p>
        <input type="number" name="vecino_litro_perdida"><br>

        <button type="submit" name="calcular">Revisar</button>
    </form>

    <?php
    if (isset($_POST['calcular'])) {
        $mi_litro_piscina = $_POST['mi_litro_piscina'];
        $mi_litro_balde = $_POST['mi_litro_balde'];
        $mi_litro_perdida = $_POST['mi_litro_perdida'];

        $vecino_litro_piscina = $_POST['vecino_litro_piscina'];
        $vecino_litro_balde = $_POST['vecino_litro_balde'];
        $vecino_litro_perdida = $_POST['vecino_litro_perdida'];

        $mis_viajes = ceil($mi_litro_piscina / ($mi_litro_balde - $mi_litro_perdida));
        $vecino_viajes = ceil($vecino_litro_piscina / ($vecino_litro_balde - $vecino_litro_perdida));

        if ($mis_viajes < $vecino_viajes) {
            echo '<h2 style="color: green;">Yo gané con ' . $mis_viajes . ' viajes :D</h2>';
        } elseif ($mis_viajes > $vecino_viajes) {
            echo '<h2 style="color: red;">El vecino ganó con ' . $vecino_viajes . ' viajes :C</h2>';
        } else {
            echo '<h2 style="color: purple;">EMPATE Ambos necesitan ' . $mis_viajes . ' viajes :I</h2>';
        }
    }
    ?>

</body>
</html>
