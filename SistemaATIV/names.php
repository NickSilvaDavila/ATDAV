<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Salário de Vendedor</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Calculadora de Salário de Vendedor</h1>
        <form action="calc_salary.php" method="POST">
            <label for="nome">Nome do Vendedor:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="meta_semanal">Meta Semanal (R$):</label>
            <input type="number" id="meta_semanal" name="meta_semanal" required><br><br>
            <label for="meta_mensal">Meta Mensal (R$):</label>
            <input type="number" id="meta_mensal" name="meta_mensal" required><br><br>
            <button type="submit">Calcular Salário</button>
        </form>
    </div>
    <?php
// Recebendo os dados do formulário
$nome = ['nome'];
$meta_semanal = ['meta_semanal'];
$meta_mensal = ['meta_mensal'];

// Definindo constantes
$salario_minimo = 1100; // Exemplo de salário mínimo
$meta_semanal_total = 20000; // Meta semanal total
$meta_mensal_total = 80000; // Meta mensal total

// Calculando bônus por semana
if ($meta_semanal_total != 0) {
    $bonus_semanal = ($meta_semanal / $meta_semanal_total) * ($salario_minimo * 0.01);
} else {

}
// Calculando excedente de meta semanal
$excedente_semanal = max(0, $meta_semanal - $meta_semanal_total);
$bonus_excedente_semanal = ($excedente_semanal / $meta_semanal_total) * ($salario_minimo * 0.05);

// Verificando se a meta mensal foi atingida
if ($meta_semanal >= $meta_semanal_total && $meta_mensal >= $meta_mensal_total) {
    // Calculando excedente de meta mensal
    $excedente_mensal = max(0, $meta_mensal - $meta_mensal_total);
    $bonus_excedente_mensal = $excedente_mensal * 0.1;
} else {
    $bonus_excedente_mensal = 0;
}

// Calculando o salário final
$salario_final = $salario_minimo + $bonus_semanal + $bonus_excedente_semanal + $bonus_excedente_mensal;

// Exibindo o resultado
echo "<h2>Resultado do cálculo para $nome:</h2>";
echo "<p>Salário Final: R$ " . number_format($salario_final, 2, ',', '.') . "</p>";
?>
</body>
</html>
