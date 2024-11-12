<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>View Inventory</title>
    <style>
        /* Reset and Base Styling */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    background-color: #f4f6f9;
}

/* Sidebar Styling */
.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: #fff;
    padding: 20px;
    position: fixed;
    height: 100%;
}

.sidebar h2 {
    text-align: center;
    font-size: 1.5em;
    margin-bottom: 20px;
}

.sidebar nav {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.sidebar nav a {
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 4px;
    transition: background 0.3s ease;
}

.sidebar nav a:hover, .sidebar nav a.active {
    background-color: #1abc9c;
}

/* Main Content Styling */
.main-content {
    margin-left: 250px;
    padding: 30px;
    width: calc(100% - 250px);
    background-color: #f4f6f9;
    min-height: 100vh;
}

.header h1 {
    font-size: 2em;
    margin-bottom: 30px; /* Space below the header */
}

/* Dashboard Cards Section */
.dashboard-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.card {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    text-align: center;
}

.card:hover {
    transform: translateY(-5px);
}

.card h3 {
    font-size: 1.2em;
    color: #34495e;
    margin-bottom: 15px;
}

.card p {
    font-size: 1.8em;
    font-weight: bold;
    color: #1abc9c;
}

/* Add Product Form Styling */
.add-product-form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 500px;
    margin: 0 auto;
}

.add-product-form h2 {
    margin-bottom: 20px;
    font-size: 1.5em;
    color: #34495e;
    text-align: center;
}

.add-product-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #2c3e50;
}

.add-product-form input[type="text"],
.add-product-form input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.add-product-form button {
    width: 100%;
    padding: 10px;
    background-color: #1abc9c;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-size: 1em;
    cursor: pointer;
    transition: background 0.3s ease;
}

.add-product-form button:hover {
    background-color: #16a085;
}

/* Table Section */
.table-section {
    margin-top: 20px;
}

.inventory-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

.inventory-table th,
.inventory-table td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.inventory-table th {
    background-color: #1abc9c;
    color: #ffffff;
    font-size: 1em;
    font-weight: bold;
    text-transform: uppercase;
}

.inventory-table td {
    color: #34495e;
    font-size: 0.9em;
}

.inventory-table tr:hover {
    background-color: #f4f6f9;
}

.inventory-table tr:last-child td {
    border-bottom: none;
}

.inventory-table td[colspan='5'] {
    text-align: center;
    color: #888;
    font-style: italic;
}

/* Responsive Design */
@media (max-width: 768px) {
    .sidebar {
        width: 200px;
    }

    .main-content {
        margin-left: 200px;
        padding: 20px;
    }

    .inventory-table th, .inventory-table td {
        padding: 10px;
    }
}

@media (max-width: 600px) {
    .sidebar {
        display: none;
    }

    .main-content {
        margin-left: 0;
        width: 100%;
    }
}

    </style>
</head>
<body>
    <!-- Sidebar Navigation -->
    <aside class="sidebar">
        <h2>Inventory Management</h2>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="add_product.php">Add Product</a>
            <a href="view_inventory.php" class="active">View Inventory</a>
            <a href="sales_report.php">Sales Report</a>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <header class="header">
            <h1>Inventory</h1>
        </header>

        <!-- Inventory Table Section -->
        <section class="table-section">
            <table class="inventory-table">
                <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Price (USD)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fetch and display product data here -->
                    <?php
                    // Example PHP code to fetch data from a database
                    // Replace with your own database connection logic
                    include('../includes/db_connect.php');

                    $sql = "SELECT * FROM products";
                    $stmt = $conn->query($sql);

                    // Check if there are any rows returned
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['description']}</td>
                                    <td>{$row['quantity']}</td>
                                    <td>{$row['price']}</td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No products found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
