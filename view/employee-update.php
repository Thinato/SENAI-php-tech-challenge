<?php include_once 'static/header.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$employee = $_SESSION['employee'];
?>

<div class="container">
    <a href="/controller?action=all-employees" class="voltar-link">Voltar</a>
    <div id="login" class="d-flex justify-content-center">
        <form class="card mb-3" style="width: 70%;"
        action="http://<?=$_SERVER['HTTP_HOST']?>/controller?action=update-employee"
        method="post">
            <div class="card-header text-center">
                <h2>Atualizar funcionário</h2>
            </div>
            <div class="card-content">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label" for="registration">Matrícula:</label>
                        <input class="form-control" type="text" id="registration" name="registration" value="<?=$employee['registration']?>" required><br><br>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="first_name">Nome:</label>
                        <input class="form-control" type="text" id="first_name" name="first_name" value="<?=$employee['first_name']?>" required><br><br>
                        </div>
                    <div class="col-md-4">
                        <label class="form-label" for="last_name">Sobrenome:</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" value="<?=$employee['last_name']?>" required><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label" for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" value="<?=$employee['email']?>" required><br><br>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="phone_number">Telefone/Celular:</label>
                        <input class="form-control" type="tel" id="phone_number" name="phone_number" value="<?=$employee['phone_number']?>" required><br><br>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="salary">Salário:</label>
                        <input class="form-control" type="number" id="salary" name="salary" step="0.01" min="0" value="<?=$employee['salary']?>" required><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label" for="role">Cargo:</label>
                        <input class="form-control" type="text" id="role" name="role" value="<?=$employee['role']?>" required><br><br>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="department">Departamento:</label>
                        <input class="form-control" type="text" id="department" name="department" value="<?=$employee['department']?>" required><br><br>
                    </div>
                </div>
                <div class="card-footer text-center">
                <input value="<?=$employee['employee_id']?>" name="employee_id" id="employee_id" hidden  >
                    <input type="submit" value="Atualizar" class="btn btn-primary submit">
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once 'static/footer.php';?>