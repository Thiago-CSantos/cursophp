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
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET["v2"] ?? 0;

      $resultado = $valor1 + $valor2;
      ?>

      <header>
            <h1>Apresente-se para nós</h1>
      </header>
      <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                  <label for="v1">Valor 1: </label>
                  <input type="number" name="v1" id="idv1" value="<?= $valor1 ?>">

                  <label for="v2">Sobrenome: </label>
                  <input type="number" name="v2" id="idv2" value="<?= $valor2 ?>">

                  <input type="submit" value="Somar">
            </form>

      </main>

      <section id="result">
            <h2>Resultado da Soma</h2>
            <?php
            echo "<p>Resultado da soma: <b>$resultado</b></p>";
            ?>
      </section>
</body>

</html>