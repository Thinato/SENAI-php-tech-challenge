<?php

class EmployeeController
{
    private EmployeeDomain $domain;

    public function __construct(EmployeeDomain $domain)
    {
        $this->domain = $domain;
    }

    public function get_all()
    {
        $employees = $this->domain->get_all();
        return $employees;
    }

    public function get_by_id($id)
    {
        $employee = $this->domain->get_by_id($id);
        return $employee;
    }

    public function create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department)
    {
        $employee = $this->domain->create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department);
        return $employee;
    }

    public function delete($id)
    {
        $employee = $this->domain->delete($id);
        return $employee;
    }

    public function update($id, $registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department)
    {
        $employee = $this->domain->update($id, $registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department);
        return $employee;
    }
}
