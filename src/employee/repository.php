<?php

class EmployeeRepository
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function get_all()
    {
        $sql = "SELECT * FROM employees";
        $result = $this->db->query($sql);
        $employees = $result->fetch_all(MYSQLI_ASSOC);
        return $employees;
    }

    public function get_by_id($id)
    {
        $sql = "SELECT * FROM employees WHERE employee_id = $id";
        $result = $this->db->query($sql);
        $employee = $result->fetch_assoc();
        return $employee;
    }

    public function create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department)
    {
        $sql = "INSERT INTO employees (registration, first_name, last_name, email, phone_number, salary, role, department) VALUES ('" . $registration . "', '" . $first_name . "', '" . $last_name . "', '" . $email . "', '" . $phone_number . "', '" . $salary . "', '" . $role . "', '" . $department . "')";
        $result = $this->db->query($sql);
        $employee = $this->get_by_id($this->db->insert_id);
        return $employee;
    }
}
