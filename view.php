<?php
// Retrieve submitted data
$name = $_POST['name'];
$roll = $_POST['roll'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Information</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
        <p><strong>Roll Number:</strong> <?php echo htmlspecialchars($roll); ?></p>
        <p><strong>Department:</strong> <?php echo htmlspecialchars($department); ?></p>

        <h2>CGPA Input</h2>
        <form action="result.php" method="post">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <input type="hidden" name="roll" value="<?php echo htmlspecialchars($roll); ?>">
            <input type="hidden" name="department" value="<?php echo htmlspecialchars($department); ?>">
            
            <label for="marks">Enter Total Marks (Out of 1000):</label>
            <input type="number" id="marks" name="marks" required>
            
            <button type="submit">Calculate CGPA</button>
        </form>
    </div>
</body>
</html>
