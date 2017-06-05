<?php 
require_once('cabecalho.php');
require_once('logicaUsuario.php');
?>
    <div class="imagem">
        <img src="./images/logo.jpg">
    </div>

    <?php if(usuarioEstaLogado()) {?>
        <h2 class="container-fluid jumbotron">Bem vindo ao Sistema de Gerência Pedagógica de Cursos</h2>

        <p class="text-success" align="center">Você está logado como <?php echo usuarioLogado();?> <a href="logout.php">Deslogar</a></p>
    <?php } else { ?>
    
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>


            <form action="login.php" method="POST" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="e-mail" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="senha" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>                
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    <?php }?>
<?php 
require_once('rodape.php')
?> 