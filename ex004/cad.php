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
            // var_dump($_COOKIES); // $_GET $_POST $_COOKIES

            $nome = $_GET["nome"] ?? "sem nome"; // ?? operador de coalescência nula
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
            echo "<p>É um prazer em te conhecer, <b>$nome $sobrenome</b>! <br> Este é o meu site!!</p>";

            ?>
            <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
      </main>
</body>

</html>