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

    public function create($name, $email, $phone, $address, $salary, $department_id)
    {
        $employee = $this->repository->create($name, $email, $phone, $address, $salary, $department_id);
        return $employee;
    }
}
