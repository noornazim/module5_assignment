<?php

// Step 1: Create an array with categories and expenses

echo "<h3>Array of Categories & Expenses</h3>";
$categories = ["Food" => 500, "Transport" => 400, "Other" => 200];
print_r($categories);
echo "<br><br>";

// Step 2: Use array functions (array_push, array_pop, array_merge, array_sum)

echo "<h3>Array Functions</h3>";

// array_push
$categories["Entertainment"] = 300;
echo "After adding Entertainment: ";
print_r($categories);
echo "<br>";

// array_pop
$last = array_pop($categories);
echo "After array_pop: ";
print_r($categories);
echo "<br>";

// array_merge
$moreExpenses = ["Bills" => 250, "Shopping" => 150];
$merged = array_merge($categories, $moreExpenses);
echo "After array_merge: ";
print_r($merged);
echo "<br>";

// array_sum
$totalExpense = array_sum($merged);
echo "Total Expense: $totalExpense<br><br>";

// Step 3: Convert string of expenses to array (explode) and back to string (implode)

echo "<h3>Explode & Implode</h3>";
$expenseString = "500,400,200,300,250,150";
$expenseArray = explode(",", $expenseString);
echo "Array from string (explode): ";
print_r($expenseArray);
echo "<br>";

$newString = implode("-", $expenseArray);
echo "String from array (implode with '-'): $newString<br><br>";

// Step 4: Use string functions (strtoupper, strlen, substr, str_replace)

echo "<h3>String Functions</h3>";
$sample = "Expense Calculator";

echo "Original: $sample<br>";
echo "Uppercase: " . strtoupper($sample) . "<br>";
echo "Length: " . strlen($sample) . "<br>";
echo "Substring (0-7): " . substr($sample, 0, 7) . "<br>";
echo "Replace 'Calculator' with 'Tracker': " . str_replace("Calculator", "Tracker", $sample) . "<br><br>";

// Step 5: Create a file named expenses.txt and write your expense data into it

echo "<h3>Write to File</h3>";
$file = "expenses.txt";
file_put_contents($file, $newString);
echo "Data written to file: $newString<br><br>";

// Step 6: Append a new expense and read the file

echo "<h3>Append & Read File</h3>";
$newExpense = "-350"; // append new expense
file_put_contents($file, $newExpense, FILE_APPEND);

// Read file content
$contents = file_get_contents($file);
echo "File contents after append: $contents<br>";
?>

