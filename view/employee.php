<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../static/style.css">
    <title>Funcionarios</title>
    <style>
        /* Estilos para o corpo da página */
        body {
            padding: 0;
            margin: 0;
            background-color: #454d6b;
        }

        /* Estilos para a seção de login */
        #login {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        /* Estilos para o cartão de login */
        .card {
            background-color: rgba(19, 19, 19, 0.3);
            padding: 40px;
            border-radius: 2px;
            width: 70%;
        }

        /* Estilos para o link de voltar */
        .voltar-link {
            position: absolute;
            top: 20px;
            left: 20px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            opacity: 0.8;
        }

        /* Estilos para o cabeçalho do cartão */
        .card-header {
            padding-bottom: 50px;
            opacity: 0.8;
            color: #fff;
        }

        /* Estilos para o separador do cabeçalho do cartão */
        .card-header::after {
            width: 70px;
            height: 1px;
            background-color: #fff;
            display: block;
            margin-top: -17px;
            margin-left: -5px;
        }

        /* Estilos para os rótulos de conteúdo do cartão */
        .card-content label {
            color: #fff;
            font-size: 12px;
            opacity: 0.8;
        }

        /* Estilos para as áreas de conteúdo do cartão */
        .card-content-area {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
        }

        /* Estilos para os placeholders dos campos de entrada */
        .card-content-area input::placeholder {
            color: #fff;
            /* Defina a cor desejada para o placeholder */
        }

        /* Estilos para os campos de entrada do cartão */
        .card-content-area input {
            margin-top: 10px;
            padding: 0 5px;
            background-color: transparent;
            border: none;
            border-bottom: 1px solid #e1e1e1;
            outline: none;
            color: #fff;
        }

        /* Estilos para o rodapé do cartão */
        .card-footer {
            display: flex;
            flex-direction: column;
        }

        /* Estilos para o botão de envio do cartão */
        .card-footer .submit {
            width: 100%;
            height: 40px;
            background-color: #a13854;
            border: none;
            color: #e1e1e1;
            margin: 10px 0;
        }

        /* Estilos para o link no rodapé do cartão */
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
    <a href="/login" class="voltar-link">Voltar</a>
    <div id="login">
        <form class="card">
            <div class="card-header text-center">
                <h2>Cadastro de novo funcionário</h2>
            </div>
            <div class="card-content col">
                <div style="display: flex;">
                    <div class="card-content-area">
                        <label class="form-label" for="registration">Registration:</label>
                        <input class="form-control" type="text" id="registration" name="registration" required><br><br>
                    </div>

                    <div class="card-content-area">
                        <label class="form-label" for="first_name">First Name:</label>
                        <input class="form-control" type="text" id="first_name" name="first_name" required><br><br>
                    </div>
                    <div class="card-content-area">
                        <label class="form-label" for="last_name">Last Name:</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" required><br><br>
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="card-content-area">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" required><br><br>
                    </div>
                    <div class="card-content-area">
                        <label class="form-label" for="phone_number">Phone Number:</label>
                        <input class="form-control" type="tel" id="phone_number" name="phone_number" required><br><br>
                    </div>
                    <div class="card-content-area">
                        <label class="form-label" for="salary">Salary:</label>
                        <input class="form-control" type="number" id="salary" name="salary" step="0.01" min="0"
                            required><br><br>
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="card-content-area">
                        <label class="form-label" for="role">Role:</label>
                        <input class="form-control" type="text" id="role" name="role" required><br><br>
                    </div>
                    <div class="card-content-area">
                        <label class="form-label" for="department">Department:</label>
                        <input class="form-control" type="text" id="department" name="department" required><br><br>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" value="Cadastrar" class="btn btn-primary submit">
                </div>
        </form>
    </div>
</body>

</html>