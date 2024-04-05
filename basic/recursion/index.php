<?php

/*
Рекурсивна функція - функція яка у своєму тілі викликає себе.

Recursion is a method of function calling in which a function 
calls itself during execution. A recursive function must 
comprise of at least one base case i.e. a condition for 
termination of execution.
*/

// Note: The factorial of n, written n!, is the product of 
// every number from 1 to n. So we can say that 4! = 4×3×2×1.
function factorial($number)
{
  if ($number < 2) {
    return $number;
  } else {
    return $number * factorial($number - 1);
  }
}

/*
Let’s step through what happens in our function when 
we call factorial(4).
- factorial(4) is called. Inside the factorial function, 
since, n=4 we take the else path. We return 4×factorial(n-1).
- factorial(3) is called. Since n=3, we take the else path. 
We return 3×factorial(n-1).
- factorial(2) is called. Since n=2, we take the else path. 
We return 2×factorial(n-1).
- factorial(1) is called. Since n=1, we take the first path, 
and finally return 1 to the previous function.
- factorial(1) returns 1 so factorial(2) can return 2×1…2.
- factorial(2) returns 2 so factorial(3) can return 3×2…6.
- factorial(3) returns 6 so factorial(4) can return 4×6…24.

The drawback of using recursion is that there is a lot of 
overhead. Every time a function is called, it is placed in 
memory. Since you don’t exit the factorial function until n 
reaches 1, n functions will reside in memory. This isn’t a 
problem with the simple factorial(4), but other functions 
can lead to serious memory requirements.
*/

echo factorial(1) . "<br>";
echo factorial(4) . "<br>";
echo factorial(6) . "<hr>";

function fibonacci($range)
{
  if ($range == 0 || $range == 1)
    return $range;
  else
    return fibonacci($range - 1) + fibonacci($range - 2);
}

echo fibonacci(1) . "<br>";
echo fibonacci(5) . "<br>";
echo fibonacci(7);