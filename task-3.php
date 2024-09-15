<?php
class Employee {
    private $name;
    private $salary;

    // Constructor to initialize employee name and salary
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    // Getter for employee name
    public function getName() {
        return $this->name;
    }

    // Setter for employee salary with validation
    public function setSalary($salary) {
        if ($salary < 0) {
            throw new Exception("Salary cannot be negative.");
        }
        $this->salary = $salary;
    }

    // Getter for employee salary
    public function getSalary() {
        return $this->salary;
    }
}

// Example usage
try {
    $employee = new Employee("John Doe", 5000);
    echo "Employee Name: " . $employee->getName() . "\n";
    echo "Employee Salary: " . $employee->getSalary() . "\n";

    // Updating salary
    $employee->setSalary(6000);
    echo "Updated Salary: " . $employee->getSalary() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
