<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
    <link rel="stylesheet" href="_css/styles.css">
</head>
<body>
    
<div class="container">
    <h1>Sequência de Fibonacci</h1>
    <ul>
        <?php
        $num1 = 0;
        $num2 = 1;
        echo "<li>$num1</li>";
        echo "<li>$num2</li>";
        for ($i = 2; $i < 10; $i++) {
            $num3 = $num1 + $num2;
            echo "<li>$num3</li>";
            $num1 = $num2;
            $num2 = $num3;
        }
        ?>
    </ul>
</div>
</body>
</html>