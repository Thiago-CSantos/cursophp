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
            <?php 
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'12-01-2023\'&@dataFinalCotacao=\'12-18-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url));
            var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            echo "Foi $cotacao";
            ?>

            <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
      </main>
</body>

</html>