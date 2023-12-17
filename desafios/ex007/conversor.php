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
            <h1>Resultado do processamento</h1>
      </header>

      <main>
            <?php
            $valorReal = $_GET["valorReal"];
            var_dump($valorReal);
            $valorCambio = "0.20";

            $valorDolar = $valorReal * $valorCambio;

            echo "<p>Seus R$ $valorReal equivalente a $valorDolar</p>"
            ?>
            <p>*<strong>Cotação fixa de R$ 4,94</strong> informarda diretamente no codigo*</p>
            <input type="button" value="Voltar" onclick="voltar()">

            <script>
                  function voltar(){
                        return history.go(-1);
                  }
            </script>
      </main>
</body>

</html>