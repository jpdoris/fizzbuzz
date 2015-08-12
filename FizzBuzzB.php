<?php
/**
 * FizzBuzz
 * Cliche, but useful.  Prints numbers from 1 to 100. For multiples of
 * three print "Fizz" instead of the number and for the multiples of five print
 * "Buzz". For numbers which are multiples of both three and five print "FizzBuzz".
 *
 * This time with recursion!
 */


function fizzBuzz($num = 0) {
  if($num < 101) {
    $nextnum = $num+1;
    if ($num % 3 == 0 && $num % 5 == 0) {
      return "FizzBuzz\n" . fizzBuzz($nextnum);
    }
    if ($num % 3 == 0) {
      return "Fizz\n" . fizzBuzz($nextnum);
    }
    if ($num % 5 == 0) {
      return "Buzz\n" . fizzBuzz($nextnum);
    }
    return $num . "\n" . fizzBuzz($nextnum);
  }
  return false;
}

echo fizzBuzz(1);
