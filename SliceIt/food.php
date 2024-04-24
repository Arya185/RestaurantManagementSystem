<?php require "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Food Menu</title>
    <style>
        .menu-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            background-color: #fff;
            width: 200px; /* Set a fixed width */
            height: 300px; /* Adjusted height to accommodate button */
            text-align: center; /* Center align content */
            display: inline-block; /* Display as inline block to allow multiple items in a row */
            margin-right: 20px;
            margin-left: 20px; 
        }

        .menu-item:last-child {
            margin-right: 0; /* Remove margin for the last item to prevent extra space */
        }
        .menu-item img {
            max-width: 100%; 
            height: auto; 
            border-radius: 4px;
            margin-bottom: 5px;
        }
        .menu-item .item-image {
            max-width: 150px; /* Adjust image size */
            max-height: 150px; /* Adjust image size */
        }
        .clear {
            clear: both; /* Clear float after items */
        }
        .order-btn {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px; /* Add margin to separate button from other content */
        }
    </style>
</head>
<body>
<?php
$menuItems = array(
    "Menu" => array(
        array(
            "" => "Chole Puri",
            "price" => 480,
            "image" => "img/chhola.jpg",
        ),
        array(
            "" => "Calamari",
            "price" => 500,
            "image" => "img/calamari.jpeg",
        ),
        array(
            "" => "Chicken Tikka",
            "price" => 380,
            "image" => "img/CT.jpeg",
        ),
        array(
            "" => "Achari Aloo Tikka",
            "price" => 500,
            "image" => "img/AATikka.jpeg",
        ),
        array(
            "" => "Samosa",
            "price" => 50,
            "image" => "img/Samosa.jpeg",
        ),
        array(
            "" => "Masala Bhutta",
            "price" => 40,
            "image" => "img/Corn.jpeg",
        ),
        array(
            "" => "Tea Time Pakora Platter",
            "price" => 650,
            "image" => "img/Fritter.jpeg",
        ),
        array(
            "" => "Naan Pizza",
            "price" => 300,
            "image" => "img/NP.jpeg",
        ),
        array(
            "" => "Cheese Masala Corn Dip",
            "price" => 80,
            "image" => "img/CC.jpeg",
        ),
        array(
            "" => "Cheese Chutney Bombs",
            "price" => 500,
            "image" => "img/CCB.jpeg",
        ),
        array(
            "" => "Chicken Chapli Kababs",
            "price" => 500,
            "image" => "img/CCK.jpeg",
        ),
        array(
            "" => "Keema Puff Pastry ",
            "price" => 60,
            "image" => "img/Puff.jpeg",
        ),
        array(
                "" => "Pancake",
                "price" => 500,
                "image" => "img/8.jpeg",
            ),
        array(
            "" => "Doughnut",
            "price" => 99,
            "image" => "img/4.jpeg",
        ),
        array(
            "" => "Pizza",
            "price" => 580,
            "image" => "img/home-img-1.png",
        ),
        array(
            "" => "Burger",
            "price" => 180,
            "image" => "img/home-img-2.png",
        ),
        array(
            "" => "Rotisserie",
            "price" => 700,
            "image" => "img/home-img-3.png",
        ),
        array(
            "" => "South Indian Thali",
            "price" => 180,
            "image" => "img/masala.jpg",
        ),
    ),
);

echo "<h1>Food Menu</h1>";

foreach ($menuItems as $category => $items) {
    echo "<h2>$category</h2>";
    foreach ($items as $item) {
        echo "<div class='menu-item'>";
        if (isset($item["image"])) {
            echo "<img class='item-image' src='" . $item["image"] . "' alt='" . $item[""] . "'><br>";
        }
        echo "<strong>" . $item[""] . "</strong><br>";
        echo "₹" . $item["price"] . "<br>";
        // Add the form for ordering
        echo "<form action='order.php' method='post' class='order-form'>";
echo "<input type='hidden' name='item_name' value='" . $item[""] . "'>";
echo "<input type='hidden' name='item_price' value='" . $item["price"] . "'>";
echo "<button type='submit' class='order-btn'>Order</button>";
echo "</form>";

        echo "</div>";
    }
}
?>

<div class="clear"></div>

</body>
</html>

<?php require "footer.php"; ?>