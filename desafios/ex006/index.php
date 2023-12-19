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
      $dividendo = $_GET['dividendo'] ?? 1;
      $divisor = $_GET["divisor"] ?? 1;
      ?>

      <header>
            <h1>Anatomia de uma Divisão</h1>
      </header>
      <main>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
                  <label for="v1">Dividendo: </label>
                  <input type="number" name="dividendo" id="idv1" min="0" value="<?= $dividendo ?>">

                  <label for="v2">Divisor: </label>
                  <input type="number" name="divisor" id="idv2" min="1" value="<?= $divisor ?>">

                  <input type="submit" value="Somar">
            </form>

      </main>

      <section id="result">
            <h2>Resultado da Soma</h2>
            <?php
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            echo "
                  <ul> 
                        <li>Dividendo: $dividendo</li>
                        <li>Divisor: $divisor</li> 
                        <li>Quociente: $quociente</li>
                        <li>Resto: $resto</li>
                  </ul> 
            ";
            ?>
      </section>
</body>

</html>