<form action="" method="POST">
    nome: <input type="text" name="nome" value="<?=@$usuario['nome']?>">
    email: <input type="text" name="email" value="<?=@$usuario['email']?>">
    senha: <input type="password" name="senha" value="<?=@$usuario['senha']?>">
    <button type="submit">Enviar</button>
</form>