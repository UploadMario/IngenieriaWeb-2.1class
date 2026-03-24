<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $resultado = $num1 + $num2;      
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>
        Esta es la suma de dos números
    </title>
</head>
<body>
    <h2>
        Suma de dos números
    </h2>

    <form method="POST">
        Número 1: <input type="number" name="num1" require><br><br>
        Número 2: <input type="number" name="num2" require><br><br>
        <input type="submit" value="Sumar">
    </form>

<?php
    if ($resultado !== "") {
        echo "<h3>Resultado: $resultado</h3>";
    }
?>
</body>
</html>


