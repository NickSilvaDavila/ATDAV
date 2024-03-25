<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <?php
    function calcularfatorial ($numero) {
        if ($numero < 0){
            return "Erro o fatorial nao pode ser calculado para numeros negativos"
        }else ($numero == 0 || $numero == 1){
            return 1;
        }else{
            $fatorial = 1;
            for ($i = 1  $i <= $numero; $i++){
                $fatorial *=$i;
            }
            return $fatorial;
        }
        }
 ?>
    
</body>
</html>