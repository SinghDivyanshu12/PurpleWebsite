

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="styles/bootstrap4/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/shop_styles.css">
    <link rel="stylesheet" href="styles/shop_responsive.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            margin: 15px 0;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-card .product-details {
            padding: 15px;
        }

        .product-card .product-title {
            font-size: 18px;
            font-weight: bold;
            margin: 0 0 10px;
        }

        .product-card .product-price {
            font-size: 16px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .product-card button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .product-card button:hover {
            background-color: #218838;
        }

        .filter-section {
            margin: 20px 0;
        }

        .filter-section select {
            width: 200px;
            padding: 5px;
            margin-right: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .filter-section button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .filter-section button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header -->
    <header class="header mt-3 mb-3">
        <h1 class="text-center">Shop Page</h1>
    </header>

    <!-- Filter Section -->
    <div class="filter-section text-center">
        <select id="sortProducts">
            <option value="default">Sort By</option>
            <option value="priceLowToHigh">Price: Low to High</option>
            <option value="priceHighToLow">Price: High to Low</option>
        </select>
        <button id="applyFilters">Apply Filters</button>
    </div>

    <!-- Product Grid -->
    <div class="row">
        <!-- Product Card -->
        <div class="col-md-4">
            <div class="product-card">
                <img src="images/product1.jpg" alt="Product 1">
                <div class="product-details">
                    <h4 class="product-title">Product 1</h4>
                    <p class="product-price">$29.99</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="product-card">
                <img src="images/product2.jpg" alt="Product 2">
                <div class="product-details">
                    <h4 class="product-title">Product 2</h4>
                    <p class="product-price">$49.99</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="product-card">
                <img src="images/product3.jpg" alt="Product 3">
                <div class="product-details">
                    <h4 class="product-title">Product 3</h4>
                    <p class="product-price">$19.99</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="mt-5 text-center">
    <p>&copy; 2024 Your Company Name. All rights reserved.</p>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script>
    // JavaScript for Sorting and Filtering
    document.getElementById('applyFilters').addEventListener('click', () => {
        const sortValue = document.getElementById('sortProducts').value;

        if (sortValue === 'priceLowToHigh') {
            alert('Sorting products: Price Low to High');
        } else if (sortValue === 'priceHighToLow') {
            alert('Sorting products: Price High to Low');
        } else {
            alert('Default sorting applied');
        }
    });
</script>

</body>
</html>
