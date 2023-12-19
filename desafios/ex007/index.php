<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>PHP</title>
</head>

<body>
      <?php
      $salario = $_GET['salario'] ?? "";
      $salarioMinimo = 1380.00;

      $result = intdiv($salario, $salarioMinimo);
      $resultResto = $salario % $salarioMinimo;

      //formatação de moedas com internacionalização!
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

      ?>

      <header>
            <h1>Informe seu sálario</h1>
      </header>
      <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                  <label for="v1">Sálario (R$): </label>
                  <input type="number" name="salario" id="idsalario" min="-1" value="<?= $salario ?>">

                  <p>Considere o salário mínimo de <strong>R$1.380,00</strong></p>
                  <input type="submit" value="Calcular">
            </form>
      </main>

      <section id="result">
            <h2>Resultado Final</h2>
            <p>Quem recebe um salário de <?= numfmt_format_currency($padrao, $salario, "BRL") ?> ganha <strong><?= $result ?> salários mínimos</strong> +
                  <?= numfmt_format_currency($padrao, $resultResto, "BRL") ?></p>
      </section>
</body>

</html>