<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <span>Sistema de calculo Fatorial</span>
    <div class="item">
        <form action=""method="post">
            <input type="number" name="numero"><br><br>
            <input type="submit">
</form>
    <?php
    // $num = 8; Codigo informado pelo(a) desenvolvedor (a)
    $num = filter_input(INPUT_POST, "numero");
 
    if ($num > 0) {
        $valor = $num;
        for ($i = ($valor -1); $i > 0; $i--){
            $valor = $valor * $i;
        }
    } else {
       $valor = 0;
    }

    echo "!{$num} = {$valor}";

    ?>
</div>
</body>
</html>