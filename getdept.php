<?php
include_once 'controller/empcontroller.php';
$id=$_GET['did'];
$empcontroller=new EmpController();
$results=$empcontroller->getEmployeesDept($id);
$output=array();
foreach($results as $result)
{
    $output[]=$result;
}

echo json_encode($output); // change 2 dimensional array to json object 
?>