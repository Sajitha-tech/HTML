<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $units = $_POST["units"];
    $bill = 0;

    if ($units <= 100) {
        $bill = $units * 3;
    } elseif ($units <= 200) {
        $bill = 100 * 3 + ($units - 100) * 5;
    } else {
        $bill = 100 * 3 + 100 * 5 + ($units - 200) * 8;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <form method="post" action="">
        Enter Units Consumed: <input type="number" name="units" required>
        <input type="submit" value="Calculate">
    </form>

    <?php if (isset($bill)): ?>
        <h3>Your Electricity Bill: ₹<?php echo $bill; ?></h3>
    <?php endif; ?>
</body>
</html>