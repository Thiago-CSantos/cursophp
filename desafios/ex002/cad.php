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
            <h1>Resultado Final</h1>
      </header>

      <main>
            <?php $numero = $_GET['number'] ?>
            <p>O número escolhido foi: <?php echo "<b> $numero </b>" ?></p>
            <p>O seu número antecessor é <?php echo $numero - 1 ?></p>
            <p>O seu número sucessor é <?php echo $numero + 1 ?></p>

            <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
      </main>
</body>

</html>