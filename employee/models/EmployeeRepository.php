<?php

class EmployeeRepository extends DbRepository{
    public function getEmployeeModel(){
        $data = [
            "ID" => "",
            "dept_id" => "",
            "dept_name" => "",
        ];
        return $data;
    }
    public function getAll(){
        $sql = "
            SELECT
                e.dept_id, d.dept_name
            FROM
                employee as e
            LEFT JOIN
                department as d
            ON
                e.dept_id = d.dept_id
            ORDER BY e.ID ASC
        ";
        return $this->fetchAll($sql);
    }
    public function insert($employee){
        $sql = "
            INSERT INTO department(dept_name)
                VALUES(:dept_name)
        ";
        $stmt = $this->execute($sql, $employee);
    }
    public function getEmployeeByID($param){
        $sql = "
            SELECT
                e.dept_id, d.dept_name
            FROM
                employee as e
            LEFT JOIN
                department as d
            ON
                e.dept_id = d.dept_id
            WHERE
                e.ID = :ID
        ";
        return $this->fetch($sql, $param);
    }
    public function update($employee){
        $sql = "
            UPDATE employee set
              dept_name = :dept_name
              updated_at = now()
        ";
        $stmt = $this->execute($sql, $employee);
    }
}