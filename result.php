<?php
// Retrieve submitted data
$name = $_POST['name'];
$roll = $_POST['roll'];
$department = $_POST['department'];
$marks = $_POST['marks'];

// Calculate CGPA (assuming CGPA = (marks / 1000) * 4.0)
$cgpa = ($marks / 1000) * 4.0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>CGPA Result</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Roll Number:</strong> <?php echo htmlspecialchars($roll); ?></p>
        <p><strong>Department:</strong> <?php echo htmlspecialchars($department); ?></p>
        <p><strong>Calculated CGPA:</strong> <?php echo number_format($cgpa, 2); ?></p>
    </div>
</body>
</html>
