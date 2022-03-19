<?php
include_once 'controller/empcontroller.php';
$id=$_POST['cid'];
$empcontroller=new EmpController();
$result=$empcontroller->deleteEmployee($id);

//list the rest of employees
$results=$empcontroller->getEmployees();
//variable Type to JS file (string)
$output=null;
$count=1;
foreach($results as $emp_result)
{
    $output .="<tr>";
    $output .="<td>" .$count++ ."</td>";
    $output .="<td>" .$emp_result['name'] ."</td>";
    $output .="<td>" .$emp_result['nrc'] ."</td>";
    $output .="<td>" .$emp_result['position'] ."</td>";
    $output .="<td>" .$emp_result['dept_name'] ."</td>";
    $output .= "<td>" .$emp_result['email'] ."</td>";
    $output .= "<td>" .$emp_result['address'] ."</td>";
    $output .= "<td id=".$emp_result['id']."><a class='btn btn-primary' href='emp_view.php?id=" . $emp_result['id'] . "'>View </a><a class='btn btn-warning m-2' href='emp_edit.php?id=".$emp_result['id']."'>Edit</a><a class='btn btn-danger m-2 delete'>Delete</a>";
    $output .="</tr>";
}
echo $output;
?>