<?php
include_once __DIR__.'/../includes/db.php';
class Customer{
private  $name;
private $email;
private $phone;
private $max_debt;
private $address;
private $ship_address;
private $pdo;

function getPdo()
{
  return $this->pdo;
}

function createCustomer($name,$email,$phone,$max_debt,$address,$ship_address)
{//1.COnnection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="insert into customer(name,email,phone,max_debt,address,ship_address) 
values(:name,:email,:ph,:debt,:addr,:ship_addr)";
//3. preprare sql statement
$statement=$this->pdo->prepare($sql);
//4. bind parmeters into values
$statement->bindParam(":name",$name);
$statement->bindParam(":email",$email);
$statement->bindParam(":ph",$phone);
$statement->bindParam(":debt",$max_debt);
$statement->bindParam(":addr",$address);
$statement->bindParam(":ship_addr",$ship_address);
//5. execute sql
if($statement->execute()){
    return true;
}
else {
    return false;
}}

function getCustomers()
{
  //1.COnnection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="select * from customer limit 10";
//3. preprare sql statement
$statement=$this->pdo->prepare($sql); 
$statement->execute();
$results=$statement->fetchAll(PDO::FETCH_ASSOC); 
return $results;
}

function getCustomer($cid)
{
  //1.COnnection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="select * from customer where id=:cid";
//3. preprare sql statement
$statement=$this->pdo->prepare($sql); 
$statement->bindParam(":cid",$cid);
$statement->execute();
$result=$statement->fetchAll(PDO::FETCH_ASSOC); 
return $result;
}

function updateCustomer($cid,$name,$email,$phone,$max_debt,$address,$ship_address){
  //1.COnnection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//2.sql statement
$sql="update customer set name=:name,email=:email,phone=:phone,max_debt=:maxdebt,
address=:addr,ship_address=:ship_addr where id=:cid";
//3. preprare sql statement
$statement=$this->pdo->prepare($sql); 
$statement->bindParam(":name",$name);
$statement->bindParam(":email",$email);
$statement->bindParam(":phone",$phone);
$statement->bindParam(":maxdebt",$max_debt);
$statement->bindParam(":addr",$address);
$statement->bindParam(":ship_addr",$ship_address);
$statement->bindParam(":cid",$cid);
return $statement->execute();

}
}


?>