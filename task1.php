<?php

// Step 1: Create constants for app name and author

define("APP_NAME", "Expense Calculator");
define("AUTHOR", "Abdur Noor Nazim");

// Step 2: Print them using echo, print, and printf

echo "<h3>Display App Info</h3>";
echo "<strong>Using echo:</strong><br>";
echo "App Name: " . APP_NAME . "<br>";
echo "Author: " . AUTHOR . "<br><br>";

print("<strong>Using print:</strong><br>");
print("App Name: " . APP_NAME . "<br>");
print("Author: " . AUTHOR . "<br><br>");

printf("<strong>Using printf:</strong><br>App Name: %s<br>Author: %s<br><br>", APP_NAME, AUTHOR);

// Step 3: Create variables for food, transport, and other expenses

echo "<h3>Define Expenses</h3>";
$food = 500;
$transport = 400;
$other = 200;

echo "Food: $food<br>";
echo "Transport: $transport<br>";
echo "Other: $other<br><br>";

// Step 4: Calculate total and average expense

echo "<h3>Calculate Total & Average</h3>";
$total = $food + $transport + $other;
$average = $total / 3;

echo "Total Expense: $total<br>";
echo "Average Expense: $average<br><br>";

// Step 5: If total > 1000, show message

echo "<h3>Budget Check (if-else)</h3>";
if ($total > 1000) {
    echo "Budget Exceeded<br><br>";
} else {
    echo "Within Budget<br><br>";
}

// Step 6: Use ternary and switch case for expense range message

echo "<h3>Expense Range Messages</h3>";

// Ternary operator
$ternaryMessage = ($total > 1000) ? "High expenses!" : (($total >= 500) ? "Moderate expenses." : "Low expenses.");
echo "Ternary message: $ternaryMessage<br>";

// Switch case
switch (true) {
    case ($total > 1000):
        $switchMessage = "Expense Level: High";
        break;
    case ($total >= 500 && $total <= 1000):
        $switchMessage = "Expense Level: Medium";
        break;
    default:
        $switchMessage = "Expense Level: Low";
        break;
}
echo "Switch case message: $switchMessage<br><br>";

// Step 7: Function to calculate total expense

function calculateTotal($food, $transport, $other) {
    return $food + $transport + $other;
}

// Step 8: Function to check the budget and show result

function checkBudget($total) {
    return ($total > 1000) ? "Budget Exceeded" : "Within Budget";
}

// Function calls for Step 7 & 8
echo "<h3>Step 7 & 8: Function Outputs</h3>";
echo "Function Budget Check: " . checkBudget($total) . "<br>";
echo "Function Total: " . calculateTotal($food, $transport, $other) . "<br>";

?>
