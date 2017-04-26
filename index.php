<?php 
require_once('cabecalho.php')
 ?>

<h2 class="container-fluid" id="titulo">Bem vindo ao Sistema de Gerência Pedagógica de Cursos!</h2>

    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="e-mail" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="senha" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar-me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
<?php 
require_once('rodape.php')
?> 