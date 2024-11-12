<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Dashboard</title>
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

        /* Dashboard Cards Section */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px; /* Adjust gap between cards */
            margin-top: 20px; /* Extra margin for added spacing from header */
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

        /* Return to Home Button */
        .return-home {
            background-color: #1abc9c;
            color: white;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .return-home:hover {
            background-color: #16a085;
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
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="add_product.php">Add Product</a>
            <a href="view_inventory.php">View Inventory</a>
            <a href="sales_report.php">Sales Report</a>
        </nav>
    </aside>

    <!-- Main Dashboard Content -->
    <main class="main-content">
        <header class="header">
            <h1>Dashboard Overview</h1>
            <!-- Return to Home Button -->
            <a href="../index.php" class="return-home">Return to Home</a>
        </header>
        
        <!-- Cards Section -->
        <section class="dashboard-cards">
            <div class="card">
                <h3>Total Products</h3>
                <p>500</p>
            </div>
            <div class="card">
                <h3>Stock Value</h3>
                <p>$15,000</p>
            </div>
            <div class="card">
                <h3>Sales This Month</h3>
                <p>$3,200</p>
            </div>
            <div class="card">
                <h3>Orders Pending</h3>
                <p>25</p>
            </div>
        </section>
    </main>
</body>
</html>
