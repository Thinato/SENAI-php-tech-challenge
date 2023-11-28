<?php
include_once 'static/header.php';
?>

<a href="/login" class="voltar-link">Voltar</a>
<div id="login">
    <form class="card" action="controller?action=register-employee" method="post">>
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


<?php
include_once 'static/footer.php';
?>
