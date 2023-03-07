<?php
namespace Solid;

class HourReporter{

  public function __construct(Employee $employee)
  {
    $this->employee = $employee;
  }

  public function reportHours()
  {
    return $this->employee->workedHours;
  }
}