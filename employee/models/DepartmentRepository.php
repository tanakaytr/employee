<?php

class DepartmentRepository extends DbRepository{
    public function getAll(){
        $sql = "select dept_name From department";
        return $this->fetchAll($sql);
    }
}