<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PHP</title>
</head>

<body>
      <?php
      $ano = date("Y");
      // Sintaxe Heredoc
      echo <<< FRASE
                  Estou estudando 
                  $ano, \n \u{1F596}
            FRASE;

      // Sintaxe Nowdoc
      echo <<< 'QUALQUER'
                  Estou estudando 
                  $ano, \n \u{1F596}
            QUALQUER;
      ?>
</body>

</html>