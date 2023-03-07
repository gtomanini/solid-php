<?php
namespace Solid;

class PayCalculator{
  private $payAmount;

  public function __construct(Employee $employee)
  {
    $this->employee = $employee;
  }

  public function calculatePay() : int 
  {
    return $this->employee->payAmount;
  }
}