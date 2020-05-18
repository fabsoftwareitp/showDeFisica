<form action="<?=@$acao?>" method="POST">
    Titulo: <input type="text" name="title" value="<?=@$new['title']?>">
    Subtitulo: <input type="text" name="subtitle" value="<?=@$new['subtitle']?>">
    Imagem: <input type="text" name="images" value="<?=@$new['images']?>">
    <button type="submit">Enviar</button>
</form>