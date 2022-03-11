<?php

include_once 'controller/customer_controller.php';
$cusContorller=new CustomerController();
$results=$cusContorller->showCustomers();
@header("Content-Disposition: attachment; filename=customer_data.csv");
$data="";
$data .="id,name,email,phone,max_debt,address,ship_address"."\n";
foreach($results as $result)
{
    $data .=$result['id'] . ",";
    $data .=$result['name'].",";
    $data .=$result['email']. ",";
    $data .=$result['phone']. ",";
    $data .=$result['max_debt']. ",";
    $data .=$result['address']. ",";
    $data .=$result['ship_address']. "\n";
}
echo $data;
exit();
?>