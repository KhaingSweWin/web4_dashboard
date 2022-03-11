<?php
include_once __DIR__.'/../model/department.php';
class DeptController extends Department{

public function getDepartments()
{
   return $this->getDeptsInfo();
}   

}
?>