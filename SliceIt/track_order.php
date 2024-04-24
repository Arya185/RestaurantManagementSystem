<?php
// Include header
require "header.php";

// Check if order number is provided
if(isset($_GET['order_number']) && !empty($_GET['order_number'])) {
    $orderNumber = htmlspecialchars($_GET['order_number']);

    // Simulate order tracking
    // Here you can integrate actual order tracking logic like querying database, etc.
    $orderStatus = "Shipped"; // Example: Assuming the order is shipped
    
    echo <<<HTML
    <!DOCTYPE html>
    <html>
    <head>
        <title>Order Tracking</title>
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
        </style>
    </head>
    <body>
    <div class="container">
        <h2>Order Tracking</h2>
        <p>Your order with order number: $orderNumber</p>
        <p>Status: $orderStatus</p>
    </div>
    </body>
    </html>
    HTML;
} else {
    echo "<h2>Error: Missing order number!</h2>";
    echo "<p>Please provide a valid order number to track your order.</p>";
}

// Include footer
require "footer.php";
?>
