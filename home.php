<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $numero = $_POST["nombre"];   
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Esta es mi nombre
    </title>
</head>
<body>
    <h2>
        Hola, mucho gusto
    </h2>

    <form method="POST">
        Mi nombre es: <input type="number" name="numero" require><br><br>
        <input type="submit" value="Mostrar">
    </form>

<?php
    if ($resultado !== "") {
        echo "<h3>Resultado: $resultado</h3>";
    }
?>
</body>
</html>
