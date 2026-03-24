<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $n = $_POST["cantidad"];

    if ($n > 0) {
        $fibonacci = [];
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++) {
            $fibonacci[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        $resultado = implode(", ", $fibonacci);
    } else {
        $resultado = "Por favor ingresa un número mayor que 0";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Serie de Fibonacci</title>
</head>
<body>
    <h2>Generar Serie de Fibonacci</h2>

    <form method="POST">
        Cantidad de números: <input type="number" name="cantidad" required><br><br>
        <input type="submit" value="Generar">
    </form>

<?php
    if ($resultado !== "") {
        echo "<h3>Resultado: $resultado</h3>";
    }
?>
</body>
</html>