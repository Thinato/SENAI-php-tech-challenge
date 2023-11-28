<?php
include_once 'static/header.php';
?>

<div id="login">
    <form class="card" action="controller?action=login" method="post">>
        <div class="card-header text-center">
            <h2>Login</h2>
        </div>
        <div class="card-content-area">
                <label for="username" class="form-label">Usuário</label>
                <input type="text" id="username" name="username" class="form-control" autocomplete="off" required>
            </div>
            <div class="card-content-area">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" name="password" class="form-control" autocomplete="off" required>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Login" class="btn btn-primary submit">
            <a href="/register" class="">Cadastrar</a>
        </div>
    </form>
</div>

<?php
include_once 'static/footer.php';
?>