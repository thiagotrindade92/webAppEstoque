<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Controle de Estoque</title>
</head>
<body>
    <div class="container">
    <h1>Listagem de Produtos</h1>
    <table class="table table-dark table-striped">
        <?php foreach ($produtos as $p): ?>
        <tr >
            <td><?= $p->nome?></td>
            <td><?= $p->valor?></td>
            <td><?= $p->descricao?></td>
            <td><?= $p->quantidade?></td>
            <td><a href="/produtos/mostra?id=<?= $p->id?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg></a> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
</body>
</html>
