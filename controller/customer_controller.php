<?php
include_once __DIR__. '/../model/customer.php';
class CustomerController extends Customer
{
//create customer
function addCustomer($name,$email,$phone,$max_debt,$address,$ship_address)
{
$result=$this->createCustomer($name,$email,$phone,$max_debt,$address,$ship_address);
return $result;
}

//list customers
function showCustomers()
{
$results=$this->getCustomers();
return $results;
}

function showCustomer($cid)
{
$result=$this->getCustomer($cid);
return $result;
}

function editCustomer($cid,$name,$email,$phone,$max_debt,$address,$ship_address)
{
$result=$this->updateCustomer($cid,$name,$email,$phone,$max_debt,$address,$ship_address);
return $result;
}
}
?>