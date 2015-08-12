<?php
/**
 * FizzBuzz w/ Recursion
 * Jamie Doris
 */

function fizzBuzz($num) {
  if ($num < 101) {
    $nextnum = $num+1;
    if ($num % 3 == 0 && $num % 5 == 0) { // divisible by both 3 and 5
      return "FizzBuzz\n" . fizzBuzz($nextnum);
    }
    if ($num % 3 == 0) {  // divisible by 3
      return "Fizz\n" . fizzBuzz($nextnum);
    }
    if ($num % 5 == 0) {  // divisible by 5
      return "Buzz\n" . fizzBuzz($nextnum);
    }
    return $num . "\n" . fizzBuzz($nextnum);  // not divisible by 3 or 5, so just print the number
  }
  return false;
}

echo fizzBuzz(1);
