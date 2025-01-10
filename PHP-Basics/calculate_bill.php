<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect input data
    $consumerName = filter_input(INPUT_POST, 'consumerName', FILTER_SANITIZE_STRING);
    $unitsConsumed = filter_input(INPUT_POST, 'unitsConsumed', FILTER_VALIDATE_INT);

    // Validate inputs
    if (!$consumerName || $unitsConsumed === false || $unitsConsumed < 0) {
        echo "<p style='color: red;'>Invalid input. Please try again.</p>";
        exit;
    }

    // Initialize the bill variable
    $billAmount = 0;

    // Calculate the bill based on the tariff
    if ($unitsConsumed <= 100) {
        $billAmount = $unitsConsumed * 5; // Rs. 5/unit for 1-100 units
    } elseif ($unitsConsumed <= 200) {
        $billAmount = 100 * 5 + ($unitsConsumed - 100) * 7.5; // Rs. 7.5/unit for 101-200 units
    } else {
        $billAmount = 100 * 5 + 100 * 7.5 + ($unitsConsumed - 200) * 10; // Rs. 10/unit for 201+ units
    }

    // Display the result
    echo "<center>";
    echo "<h2>Electricity Bill</h2>";
    echo "<p><strong>Consumer Name:</strong> " . htmlspecialchars($consumerName) . "</p>";
    echo "<p><strong>Units Consumed:</strong> " . htmlspecialchars($unitsConsumed) . " units</p>";
    echo "<p><strong>Total Bill Amount:</strong> Rs. " . number_format($billAmount, 2) . "</p>";
    echo "</center>";
} else {
    echo "<p>Invalid request.</p>";
}
?>
