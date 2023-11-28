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

    public function create($name, $email, $phone, $address, $salary, $department_id)
    {
        $employee = $this->domain->create($name, $email, $phone, $address, $salary, $department_id);
        return $employee;
    }
}
