<?php
include_once 'static/header.php';
?>
    <div id="login">
        <a href="/" class="voltar-link">Voltar</a>
        <form class="card">
            <div class="card-header text-center">
                <h2>Novo usuário</h2>
            </div>
            <div class="card-content">
                <div class="card-content-area col">
                    <label for="usuario" class="form-label">Nome de usuário</label>
                    <input type="text" placeholder="Digite nome de usuário:" id="usuario" class="form-control"
                        autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password" class="form-label">Coloque uma Senha</label>
                    <input type="password" placeholder="Digite uma senha" id="password" class="form-control"
                        autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password" class="form-label">Confirme a Senha</label>
                    <input type="password" placeholder="Confirme sua senha" id="password" class="form-control"
                        autocomplete="off">
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" value="Criar" class="btn btn-primary submit">
            </div>
        </form>
    </div>
<?php
include_once 'static/footer.php';