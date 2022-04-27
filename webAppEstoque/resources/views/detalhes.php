<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container">
    <h1>Detalhes do Produto: <?= $p->nome ?></h1>

    <ul>
        <li>
            <b>Valor: </b> R$ <?= $p->valor ?>
        </li>
        <li>
            <b>Descrição: </b> <?= $p->descricao ?>
        </li>
        <li>
            <b>Quantidade em Estoque: </b> <?= $p->quantidade ?>
        </li>
    </ul>
    </div>
</body>

</html>
