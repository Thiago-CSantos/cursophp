<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP</title>
      <link rel="stylesheet" href="style.css">
</head>

<body>
      <header>
            <h1>Resultado da conversão</h1>
      </header>

      <main>
            <?php
            $valorReal = $_GET["valorReal"];
            // var_dump($valorReal);
            $cotacao = 4.94;

            $valorDolar = $valorReal / $cotacao;

            echo "<p>Seus R\$" . number_format($valorReal, 2, ",", ".") . " equivalente a US\$ " . number_format($valorDolar, 2, ",", ".") . "</p>"
            ?>
            <p>*<strong>Cotação fixa de R$ 4,94</strong> informarda diretamente no codigo*</p>

            <?php 
                  //formatação de moedas com internacionalização!
                  $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                  echo "Seus ". numfmt_format_currency($padrao, $valorReal, "BRL"). "equivalente a ". numfmt_parse_currency($padrao, $valorDolar, "USD");
            ?>

            <input type="button" value="Voltar" onclick="voltar()">

            <script>
                  function voltar() {
                        return history.go(-1);
                  }
            </script>
      </main>
</body>

</html>