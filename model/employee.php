<?php
class Employee{
protected $eid;
protected $name;
private $salary;
public function __construct($eid,$name,$salary){
    $this->name=$name;
    $this->eid=$eid;
    $this->salary=$salary;
}
function display()
{
    echo $this->eid . "<br>";
    echo $this->name . "<br>";
    echo $this->salary . "<br>";

}
}
class Sales extends Employee {
private $dept;
private $bonus;

public function __construct($eid,$name,$salary,$dept,$bonus){
 //parent::__construct("0001","Dolly",15000);
 $this->eid=$eid;
 $this->name=$name;
 $this->dept=$dept;
 $this->bonus=$bonus;
}
function display1()
{
    $this->display();
    echo $this->dept;
    echo $this->bonus;
}

}
$emp1=new Employee("001","David",5000);
$emp1->display();
$emp2=new Sales("0010","SuSu",3000,"sales and marketing",0.7);
$emp2->display1();
?>