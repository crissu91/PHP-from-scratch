<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/

// function fahrenheitToCelsius($fahrenheitTemp)
// {
//   $celsius =  ($fahrenheitTemp - 32) * 5 / 9;
//   echo $fahrenheitTemp . '&deg;F = ' . $celsius . '&deg;C';
// }

// fahrenheitToCelsius(68);

$fahrenheitToCelsius = fn ($fahrenheitTemp) => $fahrenheitTemp . '&deg;F = ' . ($fahrenheitTemp - 32) * 5 / 9 . '&deg;C';

echo $fahrenheitToCelsius(68);


echo '<br>';

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/

$names = ['Jill', 'John', 'Jack', 'Mike', 'Harvey'];

function printNamesToUpperCase($names)
{
  foreach ($names as $name) {
    echo strtoupper($name) . '<br>';
  }
}

print_r(printNamesToUpperCase($names));



echo '<br>';

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/
$sentence = 'The quick brown fox jumped over the lazy dog';

function findLongestWord($sentence)
{
  $words = explode(' ', $sentence);
  $longestWord = '';
  foreach ($words as $word) {
    if (strlen($longestWord) < strlen($word)) {
      $longestWord = $word;
    }
  }
  return $longestWord;
}

$longestWord = findLongestWord($sentence);

echo $longestWord;
