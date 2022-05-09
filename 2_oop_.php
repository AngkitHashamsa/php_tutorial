<?php
// Priavte,public,protected
// by default the properties are treated as public;
// Private properties and methods are only accesesed by other member functiwithinon of the class;
// Protected can only be acces from within the class or derive class
class Employee
{
    private $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function __destruct()
    {
        echo "this guy ws destruct " . $this->name . "<br>";
    }

}

$employee1 = new Employee("angkit", 230);
$employee2 = new Employee("ahh", 230);
$employee3 = new Employee("bbb", 230);

// echo $employee1->name; this will not work beacause name is private
echo "<br>";
echo $employee1->salary;
