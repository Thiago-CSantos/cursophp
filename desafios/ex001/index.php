<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>PHP</title>
</head>

<body>
      <header>

      </header>
      <section>
            <h1>Trabalhando com números aleatórios</h1>
            <label for="nome">Gerando um número aleatório entre 0 e 100... </label>

            <?php
            $valor = random_int(0, 100);
            echo "<p> O valor gerado foi: $valor</p>"
            ?>

            <input type="button" onclick="realod()" value="🔄 Gerar outro">
            <script>
                  function realod(){
                        return location.reload();
                  }
            </script>

      </section>
</body>

</html>