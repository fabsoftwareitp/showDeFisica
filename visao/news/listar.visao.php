
<head>
<link rel="stylesheet" type="text/css" href="./publico/css/bootstrap.min.css">
</head>
<h2>Listar Todas Noticias</h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITULO</th>
            <th>SUBTITULO</th>
            <th>IMAGEM</th>
            <th>VIEW</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <?php foreach ($news as $new): ?>
    <tr>
        <td><?=$new['id_news']?></td>
        <td><?=$new['title']?></td>
        <td><?=$new['subtitle']?></td>
        <td><img width="10%" src="<?=$new['images']?>"></td>
        <td><a href="./news/visualizar/<?=$new['id_news']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./news/editar/<?=$new['id_news']?>" class="btn btn-info">edit</a></td>
        <td><a href="./news/deletar/<?=$new['id_news']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<a href="./news/adicionar" class="btn btn-primary">Adicionar nova noticia</a>

