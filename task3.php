<?php
class User
{ 
    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    function displayInfo()
    {
        echo "Имя: $this->name <br>";
    }
}
class Employee extends User
{
	private $salary;
    public $company;
    function __construct($name, $company, $Salary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $Salary;
    }
    function displayInfo()
    {
        echo "Имя: $this->name <br>";
        echo "Работает в $this->company <br>";
    }
    function wages($dayWork)
    {
    	$calendarWD = 30.0;
		$tax = 13;
    	$notax = $this->salary/$calendarWD*$dayWork;
    	echo  "Salary:".$notax-$notax*($tax/100.0)."<br>";
    }
    function vacationPay($vacationDays)
    {
    	echo "VacationPay:".$this->salary/29.3*$vacationDays;
    }
}
$Yarik =new User("Yarik");
$Yarik -> displayInfo();
$tom = new Employee("Tom", "Microsoft",25000);
$tom -> displayInfo();
$tom ->wages(15);
$tom ->vacationPay(15);
?>