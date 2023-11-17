<?php
// include_once 'static/header.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/style.css">
    <title>Novo usuário</title>
    <style>
        body {

            padding: 0;

            margin: 0;

            background-color: #454d6b;

        }

        #login {

            display: flex;

            align-items: center;

            justify-content: center;

            height: 100vh;

            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }

        .card {

            background-color: rgba(19, 19, 19, 0.3);

            padding: 40px;

            border-radius: 2px;

            width: 280px;

        }

        .voltar-link {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            opacity: 0.8;
        }

        .card-header {

            padding-bottom: 50px;

            opacity: 0.8;

            color: #fff;

        }

        .card-header::after {

            width: 70px;

            height: 1px;

            background-color: #fff;

            display: block;

            margin-top: -17px;

            margin-left: -5px;

        }

        .card-content label {

            color: #fff;

            font-size: 12px;

            opacity: 0.8;

        }

        .card-content-area {

            display: flex;

            flex-direction: column;

            padding: 10px 0;

        }

        .card-content-area input::placeholder {
            color: #fff;
            /* Defina a cor desejada para o placeholder */
        }


        .card-content-area input {

            margin-top: 10px;

            padding: 0 5px;

            background-color: transparent;

            border: none;

            border-bottom: 1px solid #e1e1e1;

            outline: none;

            color: #fff;

        }

        .card-footer {

            display: flex;

            flex-direction: column;

        }

        .card-footer .submit {

            width: 100%;

            height: 40px;

            background-color: #a13854;

            border: none;

            color: #e1e1e1;

            margin: 10px 0;

        }

        .card-footer a {

            text-align: center;

            font-size: 12px;

            opacity: 0.8;

            color: #fff;

            text-decoration: none;

        }
    </style>
</head>

<body>
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
</body>

</html>