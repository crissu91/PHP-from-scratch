<?php

$age = 16;

// If statement

// if ($age >= 21) {
//     echo ' you are old enought to drink in US';
// }
// If-Else

// if ($age >= 21) {
//     echo ' you are old enought to drink in US';
// } else {
//     echo ' you are NOT old enought to drink in US';
// }

// Nested if statement

// if ($age >= 21) {
//     echo ' you are old enought to drink and vote in US';
// } else {
//     if ($age >= 18) {
//         echo ' you are NOT old enought to vote in US';
//     } else {
//         echo ' you are NOT old enought to drink nor to buy alcohol in US';
//     }
// }

// If-Else-If

if ($age >= 21) {
    echo ' you are old enought to drink and vote in US';
} else if ($age >= 18) {
    echo ' you are NOT old enought to vote in US';
} else {
    echo ' you are NOT old enought to drink nor to buy alcohol in US';
}
