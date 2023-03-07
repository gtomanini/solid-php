<?php
declare(strict_types=1);
namespace Solid;

use Solid\PayCalculator;
use Solid\Employee;
use Solid\HourReporter;
use Solid\EmployeeSaver;

require('Employee.php');
require('PayCalculator.php');
require('HourReporter.php');
require('EmployeeSaver.php');

class EmployeeFacade{
  public $employee, $payCalculator, $hourReporter, $employeeSaver;
  
  public function __construct(
    PayCalculator $payCalculator, 
    HourReporter $hourReporter, 
    EmployeeSaver $employeeSaver)
  {
    $this->payCalculator = $payCalculator;
    $this->hourReporter = $hourReporter;
    $this->employeeSaver = $employeeSaver;
  }

  public function payCalculator() : int 
  {
    return $this->payCalculator->calculatePay();
  }

  public function hourReporter() : int 
  {
    return $this->hourReporter->reportHours();
  }
}

$employee = new Employee("John", 8000, 100);

$employeeFacade = new EmployeeFacade(new PayCalculator($employee), new HourReporter($employee), new EmployeeSaver($employee));
echo "Hours: " . $employeeFacade->hourReporter() . ". Pay: " . $employeeFacade->payCalculator();