<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
    Titulo: <input type="text" name="title" value="<?=@$new['title']?>">
    Subtitulo: <input type="text" name="subtitle" value="<?=@$new['subtitle']?>">
    <img width="10%" src="<?=@$new['images']?>" alt="">
    Imagem: <input type="file" name="images">
    <button type="submit">Enviar</button>
</form>