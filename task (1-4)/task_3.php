<?php

class Employee {
    // Store Private property for the salary
    private $salary;

    //  initialize the employees salary
    public function __construct($firstSalary) {
        // Use the setter method to set the initial salary
        $this->setSalary($firstSalary);
    }

    //  Get the salary as public method
    public function getSalary() {
        return $this->salary;
    }

    //  Set the salary securely as public method
    public function setSalary($amount) {
        // Ensure the salary is a positive number
        if ($amount > 0) {
            $this->salary = $amount;
        } else {
            throw new InvalidArgumentException('Salary does not take  any negative number');
        }
    }
}

//  usage:
try {
    $employee = new Employee(50000);
    echo "First  Salary: " . $employee->getSalary() . "\n";

    $employee->setSalary(60000);
    echo "Updated Salary: " . $employee->getSalary() . "\n";

    //  throw an exception
    $employee->setSalary(-1000);
} catch (InvalidArgumentException $e) {
    echo "Must be Know: " . $e->getMessage() . "\n";
}
?>