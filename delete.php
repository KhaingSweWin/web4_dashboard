<?php
include_once 'includes/db.php';
include_once 'model/customer.php';

if(isset($_POST['id']))
{

$cid=$_POST['id'];

//1.COnnection
$pdo=Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="delete from customer where id=:cid";
//3. preprare sql statement
$statement=$pdo->prepare($sql); 
$statement->bindParam(":cid",$cid);
$statement->execute();

$sql1="select * from customer";
$statement=$pdo->prepare($sql1); 
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
$output="";
foreach($results as $result)
{
    $output .= "<tr>";
    $output.= "<td>". $result['name']."</td>";
    $output.= "<td>". $result['email']."</td>";
    $output.= "<td>". $result['phone']."</td>";
    $output.= "<td>". $result['max_debt']."</td>";
    $output.= "<td>". $result['address']."</td>";
    $output.= "<td>". $result['ship_address']."</td>";
    $output.= "<td id=". $result['id'] ."><a href='view_customer.php?cid=". $result['id'] ."' class='btn btn-success'><i class='fa fa-eye'></i></a><a href='edit_customer.php?cid=". $result['id'] ."'  class='btn btn-warning'><i class='fa fa-edit'></i></a> <button class='btn btn-danger' id='delete'><i class='fa fa-trash'></i></button></td>";
    $output.= "</tr>";
}

echo $output;
}


?>