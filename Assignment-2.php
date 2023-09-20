<?php
// Task 1: Looping with Increment using a Function
/* Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also. */


               // Solution of Task-1:
echo "\n\n";
echo "==> Task-1===>\n(Using For Loop)=====>\n\n";

function printAlternateEvenNumbers(int $start, int $end, int $step){
  $evenNumbers = [];
  for ($i = $start; $i <= $end; $i += 1) { // Using "for loop" to get even numbers.
    if ($i % 2 == 0) {
      $evenNumbers[] = $i;
    }
  }
  // Using another "for loop" to get every alternate even number.
  for ($i = 0; $i < count($evenNumbers); $i += $step) {
    echo $evenNumbers[$i] ." ". "\n";
  }
}

printAlternateEvenNumbers(1, 20, 2);

echo "\n\n<br>";
echo "====> Task-1=>\n(Using While Loop)===>\n\n";

function printAlternateEvenNumbers1(int $start, int $end, int $step){
  $i = $start;
  // If $start is odd, increment it to the next even number
  if ($i % 2 != 0) {
    $i++;
  }
  while ($i <= $end) {
    if ($i % 2 == 0) {
      echo $i . " " . "\n";
    }
    $i += $step * 2; //to skip odd numbers
  }
}

printAlternateEvenNumbers1(1, 20, 2);

echo "\n\n<br>";
echo "====> Task-1=>\n(Using Do-while Loop)=>\n\n";
function printAlternateEvenNumbers2(int $start, int $end, int $step)
{
  $i = $start;
  if ($i % 2 != 0) {
    $i++;
  }
  do {
    if ($i % 2 == 0) {
      echo $i . " " . "\n";
    }
    $i += $step * 2;    // to skip odd numbers
  } while ($i <= $end);
}

printAlternateEvenNumbers2(1, 20, 2);


echo "\n\n<br>";
echo "==> Task-2==>\n\n";
// Task 2: Skip Multiples of 5
/* Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
loop encounters a multiple of 5, it should skip that number using the continue statement and
continue to the next iteration. */

               // Solution of Task-2:
for ($i = 1; $i <= 50; $i++) {   // For loop initialized from 1 and continued upto 50.
  if ($i % 5 == 0) {    //IF any number is a multiple of 5, it will be skipped.
    continue;
  }
  echo $i . " " . "\n";
}


echo "\n\n<br>";
echo "==> Task-3==>\n\n";
// Task 3: Break on Condition
/* Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
 */

               // Solution of Task-3:
$totalFibonacciNumbers = 10;  //As the first 10 Fibonacci numbers are wanted
$old = 0;
$next = 1;
$newest = 1;
for ($i = 0; $i < $totalFibonacciNumbers; $i++) {
  if ($old > 100) {
    break;            // Use of break statement (for any number greater than 100, if encountered) in "for loop".
  }
  echo $old . " " . "\n";
  $next = $newest;
  $newest = $old + $next;
  $old = $next;
}

echo "\n\n<br>";
echo "==> Task-4==>\n\n";



//  Task 4: Fibonacci Series printing using a Function
/* Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function. */

               // Solution of Task-4:
function fibonacci(int $totalNum = 15)
{
  $old = 0;
  $next = 1;
  $newest = 1;
  for ($i = 0; $i < $totalNum; $i++) {
  
    echo $old . " " . "\n";  //Printing the first 15 numbers.
    $next = $newest;
    $newest = $old + $next;
    $old = $next;
  }
}
fibonacci(15);   //Taking 15 as an argument of a function