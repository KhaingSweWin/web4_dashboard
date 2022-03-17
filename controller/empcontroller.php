<?php
include_once __DIR__.'/../model/employee.php';
class EmpController extends Employee{

public function getEmployees()
{
   return $this->getEmpsInfo();
} 
public function addEmployee($name,$nrc,$position,$dept,$email,$phone,$address)
{
   return $this->addEmp($name,$nrc,$position,$dept,$email,$phone,$address);
}  
public function getEmployee($id)
{
   return $this->getEmpInfo($id);
}
public function updateEmployee($id,$name,$nrc,$position,$dept,$email,$phone,$address)
{
   return $this->updateEmpinfo($id,$name,$nrc,$position,$dept,$email,$phone,$address);
}
}
?>