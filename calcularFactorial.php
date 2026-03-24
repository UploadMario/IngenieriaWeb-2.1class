<?php
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $numero = $_POST["numero"];
        $factorial = 1;
        
        for ($i = 1; $i <= $numero; $i++)
        {
            $resultado = $factorial;  
        }    
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Esta es el factorial de un números
    </title>
</head>
<body>
    <h2>
        Factorial de un números
    </h2>

    <form method="POST">
        Número: <input type="number" name="numero" require><br><br>
        <input type="submit" value="Calcular">
    </form>

<?php
    if ($resultado !== "") {
        echo "<h3>Resultado: $resultado</h3>";
    }
?>
</body>
</html>
