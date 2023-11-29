<?php
include_once 'static/header.php';
session_start();
$employees = $_SESSION['employees'];
?>

<div id="employee">
    <a href="login" class="voltar-link">Logout</a>
    <table>
        <tr>
            <th>Registration</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Salary</th>
            <th>Role</th>
            <th>Department</th>
        </tr>
        <?php foreach ($employees as $employee) : ?>
            <tr>
                <td><?= $employee['registration'] ?></td>
                <td><?= $employee['first_name'] ?></td>
                <td><?= $employee['last_name'] ?></td>
                <td><?= $employee['email'] ?></td>
                <td><?= $employee['phone_number'] ?></td>
                <td><?= $employee['salary'] ?></td>
                <td><?= $employee['role'] ?></td>
                <td><?= $employee['department'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div>
        <a class="btn" href="/employee/register">Cadastrar </a>
    </div>
</div>

<?php
include_once 'static/footer.php';
?>
