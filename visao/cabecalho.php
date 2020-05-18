<div class="header">
    <a href="."><img src="publico/img/elements/LogoShowDeFisica.png" alt=""></a>
    <input type="checkbox" name="" id="check">
    <div class="links-menu">
        <a class="nav-link" href=".">Início</a>
        <a class="nav-link" href="pages/about">Sobre</a>
        <a class="nav-link" href="pages/overview">Agenda</a>
        <a class="nav-link" href="pages/gallery">Galeria</a>
        <a class="nav-link" href="pages/contact">Contato</a>
        <a class="nav-link" href="pages/support">Patrocine</a>
        <?php
        if (isset($_SESSION["acesso"])) {
            echo "<a href='login/logout'>Logout</a>";
            echo "<a href='pages/dashboard'>Dashboard</a>";
        } else {
            echo "<a href='login/'>Login</a>";
        }
        ?>
    </div>
    <label for="check">Menu</label>
</div>