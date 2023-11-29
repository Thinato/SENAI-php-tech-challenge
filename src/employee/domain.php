<?php

class EmployeeDomain
{
    private EmployeeRepository $repository;

    public function __construct(EmployeeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function get_all()
    {
        $employees = $this->repository->get_all();
        return $employees;
    }

    public function get_by_id($id)
    {
        $employee = $this->repository->get_by_id($id);
        return $employee;
    }

    public function create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department)
    {
        $employee = $this->repository->create($registration, $first_name, $last_name, $email, $phone_number, $salary, $role, $department);
        return $employee;
    }
}
