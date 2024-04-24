<?php
// Include header
require "header.php";

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Function to simulate order processing
function processOrder($itemName, $itemPrice)
{
    // Simulate order processing
    // Here you can integrate actual order processing logic like saving to database, sending confirmation emails, etc.
    return true;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process order if form is submitted
    if (isset($_POST['item_name']) && isset($_POST['item_price'])) {
        $itemName = sanitizeInput($_POST['item_name']);
        $itemPrice = $_POST['item_price'];
        
        // Validate item price as numeric
        if (!is_numeric($itemPrice)) {
            echo "<h2>Error: Invalid item price!</h2>";
            echo "<p>Please provide a valid numeric item price.</p>";
            exit; // Exit script if item price is invalid
        }
        
        if (processOrder($itemName, $itemPrice)) {
            echo "<div class='container'>";
            echo "<h2>Your order for $itemName has been placed successfully!</h2>";
            echo "<p>Total Amount: ₹$itemPrice</p>";
            echo "<p>Thank you for your order!</p>";
            echo "<p>Your order is being processed. You will receive a confirmation email shortly.</p>";
            echo "</div>"; // Close container
        } else {
            echo "<h2>Error processing your order.</h2>";
            echo "<p>Please try again later.</p>";
        }
    } else {
        echo "<h2>Error: Missing item details!</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
        }
        p {
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            color: #555;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        </style>
</head>
<body>

<div class="container">
    <h3>Add More Items:</h3>
    <form action='food.php' method='get'>
        <button type='submit'>Add More</button>
    </form>

    <h3>Track Your Order:</h3>
    <p>To track your order status, please provide your order number:</p>
    <form action='track_order.php' method='get'>
        <label for='order_number'>Order Number:</label>
        <input type='text' id='order_number' name='order_number' required>
        <button type='submit'>Track Order</button>
    </form>
</div> <!-- .container -->

<?php
// Include footer
require "footer.php";
?>
</body>
</html>