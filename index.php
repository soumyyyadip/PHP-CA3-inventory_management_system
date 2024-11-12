<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Inventory Management System</title>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <img src="assets/images/logo.svg" alt="Logo" class="logo">
            <h1>Inventory Management System</h1>
            <nav class="navbar">
                <a href="pages/dashboard.php">Dashboard</a>
                <a href="pages/add_product.php">Add Product</a>
                <a href="pages/view_inventory.php">View Inventory</a>
                <a href="pages/sales_report.php">Sales Report</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h2>Effortless Inventory Control</h2>
            <p>Manage stock, track orders, and streamline your operations with ease.</p>
            <a href="pages/dashboard.php" class="cta-button">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <h2>Why Choose Our System?</h2>
        <div class="feature-cards">
            <div class="feature">
                <img src="assets/images/products.jpg" alt="Products">
                <h3>Manage Products</h3>
                <p>Organize your inventory with an intuitive product management interface.</p>
            </div>
            <div class="feature">
                <img src="assets/images/inventory.jpg" alt="Inventory">
                <h3>Track Inventory</h3>
                <p>Maintain optimal stock levels to avoid overstocking or shortages.</p>
            </div>
            <div class="feature">
                <img src="assets/images/sales.jpg" alt="Sales">
                <h3>Analyze Sales</h3>
                <p>Generate insights and reports to make data-driven decisions.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> Inventory Management System. All rights reserved.</p>
    </footer>
</body>
</html>
