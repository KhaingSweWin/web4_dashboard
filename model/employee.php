<?php
include_once __DIR__.'/../includes/db.php';
class Employee{
private $pdo=null;
public function getEmpsInfo()
{
    $this->pdo=Database::connect();
    if($this->pdo!=null)
    {
       // echo "successful connection";
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="SELECT employee.* , department.name as dept_name FROM
        employee inner join department
        on employee.dept_id=department.id ";
        //sql statement
        $statement=$this->pdo->prepare($sql);
        //run sql statement
        $statement->execute();
        //get the results
        $results=$statement->fetchAll(PDO::FETCH_ASSOC);
        //echo sizeof($results);
        return $results;
    }
}
public function getEmpInfo($id)
{
    $this->pdo=Database::connect();
    if($this->pdo!=null)
    {
       // echo "successful connection";
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="SELECT employee.* , department.name as dept_name,department.id as dept_id FROM
        employee inner join department
        on employee.dept_id=department.id 
        and employee.id=:id";
        //sql statement
        $statement=$this->pdo->prepare($sql);
        //run sql statement
        $statement->bindParam(":id",$id);
        $statement->execute();
        //get the results
        $result=$statement->fetchAll(PDO::FETCH_ASSOC);
        //echo sizeof($results);
        return $result;
    }
}
public function addEmp($name,$nrc,$position,$dept,$email,$phone,$address)
{
    $this->pdo=Database::connect();
    if($this->pdo!=null)
    {
       // echo "successful connection";
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="insert into employee(name,nrc,position,dept_id,email,phone,address) values(:name,:nrc,:pos,:dept,:email,:phone,:addr)";
        //sql statement
        $statement=$this->pdo->prepare($sql);
        $statement->bindParam(":name",$name);
        $statement->bindParam(":nrc",$nrc);
        $statement->bindParam(":pos",$position);
        $statement->bindParam(":dept",$dept);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":phone",$phone);
        $statement->bindParam(":addr",$address);
        //run sql statement
        if($statement->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }
}
public function updateEmpInfo($id,$name,$nrc,$position,$dept,$email,$phone,$address)
{
    $this->pdo=Database::connect();
    if($this->pdo!=null)
    {
       // echo "successful connection";
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //sql query
        $sql="update employee set name=:name,nrc=:nrc,position=:pos,dept_id=:dept,email=:email,phone=:phone,address=:addr where id=:id";
        //sql statement
        $statement=$this->pdo->prepare($sql);
        $statement->bindParam(":id",$id);
        $statement->bindParam(":name",$name);
        $statement->bindParam(":nrc",$nrc);
        $statement->bindParam(":pos",$position);
        $statement->bindParam(":dept",$dept);
        $statement->bindParam(":email",$email);
        $statement->bindParam(":phone",$phone);
        $statement->bindParam(":addr",$address);
        //run sql statement
        if($statement->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }  
}

}
?>