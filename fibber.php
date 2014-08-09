<?php
/*
 *The first two numbers in the Fibonacci sequence 0 and 1,
 *and each subsequent number is the sum of the previous two.
 */

#The fib_ function will use recursion to display the value in the fibonacci sequence at the $number provided
function fib_($number) {
	//First the base case
	if($number == 0 || $number == 1)
		return $number;
	//Recursion
	return fib_($number - 1) + fib_($number - 2);
}

#The fib function will use a for loop to display the full fibonacci sequence from 0 to $n
function fib($n) {
	for($i=0;$i<$n;$i++) {
		echo fib_($i) . ' ';
	}
}

fib(10); // The first 10 numbers in the Fibonacci sequence...0 1 1 2 3 5 8 13 21 34
?>