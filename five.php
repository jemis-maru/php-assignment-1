<?php 

function printLeapYears($startYear) {
  $isLeapYear = $startYear % 4 === 0;
  
  $firstLeapYear = $startYear;
  if(!$isLeapYear) {
    $firstLeapYear = $startYear + $startYear % 4;
  }

  $listOfLeapYear = [$firstLeapYear];
  $currentYear = intval(date("Y"));
  $leapYear = $firstLeapYear;

  while($leapYear + 4 <= $currentYear) {
    $leapYear = $leapYear + 4;
    array_push($listOfLeapYear, $leapYear);
  }

  return $listOfLeapYear;
}

print_r(printLeapYears(1970));

?>