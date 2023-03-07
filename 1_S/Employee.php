<?php
declare(strict_types=1);
namespace Solid;

class Employee{
  public $hoursWorked;
  public $payAmount;

  function __construct($name, $pay, $hours){
    $this->workedHours = $hours;
    $this->payAmount = $pay;
  }
}