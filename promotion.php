<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'login_register');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promotions</title>
    <link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .promotion-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin: 15px 0;
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .promotion-card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .promotion-card img {
            width: 100%;
            height: auto;
        }

        .promotion-card .promotion-details {
            padding: 15px;
        }

        .promotion-card .promotion-title {
            font-size: 20px;
            font-weight: bold;
            margin: 0 0 10px;
        }

        .promotion-card .promotion-description {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .promotion-card .promotion-date {
            font-size: 12px;
            color: #888;
            margin-bottom: 10px;
        }

        .promotion-card .promotion-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .promotion-card .promotion-btn:hover {
            background-color: #0056b3;
        }

        .header {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #f1f1f1;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header -->
    <div class="header">
        <h1>Latest Promotions</h1>
        <p>Don't miss out on these exclusive deals!</p>
    </div>

    <!-- Promotion Cards -->
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="promotion-card">
                <img src="images/promo1.jpg" alt="Promo 1">
                <div class="promotion-details">
                    <h4 class="promotion-title">50% Off on Electronics</h4>
                    <p class="promotion-description">Get the latest gadgets and electronics at half price. Limited time offer!</p>
                    <p class="promotion-date">Valid Until: 30th November 2024</p>
                    <button class="promotion-btn">Shop Now</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="promotion-card">
                <img src="images/promo2.jpg" alt="Promo 2">
                <div class="promotion-details">
                    <h4 class="promotion-title">Buy 1 Get 1 Free</h4>
                    <p class="promotion-description">Avail this exciting offer on select fashion items. Hurry up!</p>
                    <p class="promotion-date">Valid Until: 25th December 2024</p>
                    <button class="promotion-btn">Explore Now</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="promotion-card">
                <img src="images/promo3.jpg" alt="Promo 3">
                <div class="promotion-details">
                    <h4 class="promotion-title">Free Shipping on Orders Over $50</h4>
                    <p class="promotion-description">Enjoy free delivery on all orders above $50. Save more on every purchase!</p>
                    <p class="promotion-date">Valid Until: 31st January 2025</p>
                    <button class="promotion-btn">Start Saving</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Your Company Name. All rights reserved.</p>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>

</body>
</html>
