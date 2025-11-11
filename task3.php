<?php

// Start session
session_start();

// Step 1: Handle form submission

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['budget'])) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['budget'] = $_POST['budget'];
    }
}

// Step 2: Display welcome message if session exists

if (isset($_SESSION['name']) && isset($_SESSION['budget'])) {
    echo "<h3>Session Welcome Message</h3>";
    echo "Welcome, " . htmlspecialchars($_SESSION['name']) . "! Your budget is " . htmlspecialchars($_SESSION['budget']) . ".<br><br>";
}

// Step 3: Delete session if requested

if (isset($_POST['delete_session'])) {
    session_unset();
    session_destroy();
    echo "<h3>Session deleted successfully!</h3><hr>";
}


// Step 1: Simple form

echo "<h3>Enter Name & Budget</h3>";
?>
<form method="post">
    Name: <input type="text" name="name" required>
    Budget: <input type="number" name="budget" required>
    <input type="submit" value="Submit">
</form>

<form method="post">
    <input type="hidden" name="delete_session" value="1">
    <input type="submit" value="Delete Session">
</form>
<hr>
<?php

// Step 4: Recursive function to calculate sum from an array

echo "<h3>Recursive Sum Function</h3>";
function recursiveSum($arr, $index = 0) {
    if ($index >= count($arr)) {
        return 0;
    }
    return $arr[$index] + recursiveSum($arr, $index + 1);
}

$numbers = [10, 20, 30, 40, 50];
echo "Array: [" . implode(", ", $numbers) . "]<br>";
echo "Sum (recursive): " . recursiveSum($numbers) . "<br><br>";

// Step 5: Function applying a discount using a callback

echo "<h3>Discount with Callback</h3>";
function applyDiscount($amount, $callback) {
    return $callback($amount);
}

$discounted = applyDiscount(1000, function($amt) {
    return $amt * 0.9; // 10% discount
});

echo "Original amount: 1000<br>";
echo "After discount: $discounted<br><br>";

// Step 6: Division function with try-catch-finally

echo "<h3>Division with Exception Handling</h3>";
function safeDivide($a, $b) {
    try {
        if ($b == 0) {
            throw new Exception("Division by zero error!");
        }
        $result = $a / $b;
        echo "Result: $result<br>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "<br>";
    } finally {
        echo "Operation attempted.<br><br>";
    }
}

safeDivide(100, 5); // normal division
safeDivide(50, 0);  // triggers exception
?>
