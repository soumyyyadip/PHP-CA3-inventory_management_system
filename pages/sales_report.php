<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Sales Report</title>
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
            margin-bottom: 30px; /* Add space below the header */
        }

        /* Sales Report Table */
        .sales-report-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 30px;
        }

        .sales-report-table th, .sales-report-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .sales-report-table th {
            background-color: #1abc9c; /* Teal color */
            color: #fff;
            font-size: 1em;
            font-weight: bold;
            text-transform: uppercase;
        }

        .sales-report-table td {
            color: #34495e;
            font-size: 0.9em;
        }

        .sales-report-table tr:hover {
            background-color: #f4f6f9;
        }

        .sales-report-table tr:last-child td {
            border-bottom: none;
        }

        .sales-report-table td[colspan='5'] {
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
            <a href="view_inventory.php">View Inventory</a>
            <a href="sales_report.php" class="active">Sales Report</a>
        </nav>
    </aside>

    <!-- Main Sales Report Content -->
    <main class="main-content">
        <header class="header">
            <h1>Sales Report</h1>
        </header>

        <!-- Sales Report Table -->
        <section class="sales-report-section">
            <table class="sales-report-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity Sold</th>
                        <th>Total Sales</th>
                        <th>Sale Date</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data (Replace with dynamic PHP data) -->
                    <tr>
                        <td>Product A</td>
                        <td>50</td>
                        <td>$1,000</td>
                        <td>2024-10-10</td>
                    </tr>
                    <tr>
                        <td>Product B</td>
                        <td>30</td>
                        <td>$600</td>
                        <td>2024-10-12</td>
                    </tr>
                    <tr>
                        <td>Product C</td>
                        <td>20</td>
                        <td>$400</td>
                        <td>2024-10-15</td>
                    </tr>
                    <!-- Add more rows dynamically from your database -->
                    <tr colspan="5">
                        <td colspan="5">No sales data available</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
