<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redondo ou Não</title>
</head>

<body>
    <h1>Código para Verificar - Redondo ou Não</h1>
     <!--Codigo PHP -->
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['number'];

        if ($num % 10 == 0) {
            echo "O número informado é redondo";
        } else {
            echo "O número informado não é redondo";
        }
    }
    ?>
    <form method="post" action="">
        <label for="number">Informe um número:</label>
        <input type="text" name="number" id="number" required>
        <button type="submit" name="submit">Verificar</button>
    </form>
</body>
</html>