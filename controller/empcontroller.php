<?php
include_once __DIR__.'/../model/employee.php';
class EmpController extends Employee{

public function getEmployees()
{
   return $this->getEmpsInfo();
}   

}
?>