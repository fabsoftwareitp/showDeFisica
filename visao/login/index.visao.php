<h2>Acesse o sistema</h2>

<form method="POST" action="<?=@$acao?>">


    <label for="login">Email:</label>
    <input id="login" class="form-control" type="text" name="email">

    <label for="passwd">Senha:</label>
    <input id="passwd" class="form-control" type="password" name="senha">

    <button type="submit" class="btn btn-primary">Acessar</button>

</form>