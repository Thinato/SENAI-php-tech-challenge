<?php
include_once 'static/header.php';
?>

<div id="login">
    <form class="card" action="employee" method="post">
        <div class="card-header text-center">
            <h2>Login</h2>
        </div>
        <div class="card-content">
            <div class="card-content-area">
                <label for="username" class="form-label">Usuário</label>
                <input type="text" id="username" class="form-control" autocomplete="off" required>
            </div>
            <div class="card-content-area">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" class="form-control" autocomplete="off" required>
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" value="Login" class="btn btn-primary submit">
            <a href="/" class="">Cadastrar</a>
        </div>
    </form>
</div>

<?php
include_once 'static/footer.php';
?>