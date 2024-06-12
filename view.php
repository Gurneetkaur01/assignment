<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>View Employees</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="add.php">Add Employee</a></li>
                <li><a href="view.php">View Employees</a></li>
            </ul>
        </nav>
        <h1>View Employees</h1>
    </header>
    <main>
        <?php include 'fetch.php'; ?>
    </main>
    <footer>
        <p>&copy; 2024 Employee Portal</p>
    </footer>
</body>
</html>
