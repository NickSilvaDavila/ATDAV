<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        section {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            padding: 20px;
            width: 80%;
            max-width: 600px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
        }
        input[type="number"] {
            width: 100px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 15px;
            background-color: #007bff;
            border: none;
            border-radius: 3px;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .tabuada {
            margin-top: 20px;
        }
        .tabuada p {
            margin: 5px 0;
            color: #333;
        }
    </style>
</head>
<body>
    <section>
        <h1>Sistema de Tabuada</h1>
        <div>
            <form action="" method="post">
                <input type="number" name="numero">
                <br><br>
                <input type="submit">
            </form>
        </div>
        <div class="tabuada">
            <?php
                $num = filter_input(INPUT_POST, "numero");
                if($num){
                    for ($i=1; $i <= 10 ; $i++) { 
                        echo "<p>$num x $i = " . ($num * $i) . "</p>";
                    }
                } else{
                    //echo "Por favor informe um numero para a tabuada";
                    echo "<script>alert('Por favor informe um numero para a tabuada');</script>";
                }
            ?>
        </div>
    </section>
</body>
</html>