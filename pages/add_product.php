<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Add Product</title>
    <style>
        /* Add Product Page - Form Section */
.form-section {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 50px;
    background-color: #f4f6f9;
}

.form-container {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    width: 100%;
    text-align: center;
}

.form-container h2 {
    font-size: 1.8em;
    color: #333;
    margin-bottom: 20px;
}

.form-container label {
    display: block;
    margin-top: 15px;
    color: #34495e;
    font-weight: bold;
    text-align: left;
}

.form-container input[type="text"],
.form-container input[type="number"],
.form-container textarea {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1em;
    background-color: #f9f9f9;
    color: #333;
}

.form-container textarea {
    resize: vertical;
}

.submit-button {
    background-color: #1abc9c;
    color: #ffffff;
    padding: 12px 25px;
    border: none;
    border-radius: 5px;
    font-size: 1.1em;
    font-weight: bold;
    cursor: pointer;
    margin-top: 20px;
    transition: background 0.3s ease;
}

.submit-button:hover {
    background-color: #16a085;
}

/* Responsive Design */
@media (max-width: 600px) {
    .form-container {
        padding: 20px;
        width: 90%;
    }

    .form-container h2 {
        font-size: 1.6em;
    }

    .submit-button {
        padding: 10px 20px;
        font-size: 1em;
    }
}

    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <h1>Add New Product</h1>
            <nav class="navbar">
                <a href="dashboard.php">Dashboard</a>
                <a href="view_inventory.php">View Inventory</a>
                <a href="sales_report.php">Sales Report</a>
            </nav>
        </div>
    </header>

    <!-- Add Product Form Section -->
    <section class="form-section">
        <div class="form-container">
            <h2>Enter Product Details</h2>
            <form action="../api/add_product.php" method="POST">
                <label for="name">Product Name</label>
                <input type="text" id="name" name="name" required>

                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required></textarea>

                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" required>

                <label for="price">Price (in USD)</label>
                <input type="number" id="price" name="price" step="0.01" required>

                <button type="submit" class="submit-button">Add Product</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Inventory Management System. All rights reserved.</p>
    </footer>
</body>
</html>
