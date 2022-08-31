<?php 
    
    $numero1 = $_GET['n1'];
    $numero2 = $_REQUEST['n2'];
    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $produto = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - PHP</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            height: 500px;
        }
        
        .formsoma {
            display: flex;
            flex-direction: column;
            width: 150px;
            padding: 5px;
            background-color: gray;
            border: 1px solid black;
            margin: 0 auto;
            justify-content: center
        }
        
        .resultado {
            margin: 10px;
            background-color: blue;
            display: flex;
            flex-direction: column;
            width: 250px;
            margin: 10px auto;
            justify-content: center;
            align-items: center;
            border: 2px solid gray;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
    <form method="GET"  class="formsoma">
        Numero 1: <input type="text"  name="n1"/>
        Numero 2: <input type="text"  name="n2"/>
        <input type="submit" value="Calcular" />
    </form>

    <?php 
    echo "<div class='resultado'>";
    echo "<p>Soma: ".$soma."</p>";
    echo "<p>Subtração: ".$subtracao."</p>";
    echo "<p>Multiplicação: ".$produto."</p>";
    echo "<p>Divisão: ".$divisao."</p>";
    echo "</div>"
    ?>
    </div>
</body>
</html>

