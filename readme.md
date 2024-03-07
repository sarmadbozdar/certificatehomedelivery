<?php
// Start session to enable the use of session variables
session_start();

// Initialize an empty array to store selected items
$selectedItems = array();

// Initialize grand total
$grandTotal = 0;

// Check if the form was submitted
if (isset($_POST['order'])) {
    // Check if category is selected
    if (isset($_POST['category'])) {
        $selectedItems['Category'] = $_POST['category'];
        // Store the category name in a variable for later use
        $category = $_POST['category'];
    }
    if (isset($_POST['marksheet'])) {
        $selectedItems['Marksheet'] = $_POST['marksheet'];
        $grandTotal += $_POST['marksheet'];
    }
    if (isset($_POST['passCertificate'])) {
        $selectedItems['Pass Certificate'] = $_POST['passCertificate'];
        $grandTotal += $_POST['passCertificate'];
    }
    if (isset($_POST['paccaCertificate'])) {
        $selectedItems['Pacca Certificate'] = $_POST['paccaCertificate'];
        $grandTotal += $_POST['paccaCertificate'];
    }

    // Store selected items data in a session variable
    $_SESSION['selectedItems'] = $selectedItems;
    $_SESSION['grandTotal'] = $grandTotal;

    // Redirect to the checkout page
    header('Location: test.php');
    exit();
}
?>

<!-- Display selected items on the checkout page -->
<?php
// Check if selected items data is stored in the session
if (isset($_SESSION['selectedItems'])) {
    // Retrieve selected items data from the session
    $selectedItems = $_SESSION['selectedItems'];

    // Print the category name
    if (isset($category)) {
        echo "<h1>$category</h1>";
    }

    // Display selected items, including the category name
    foreach ($selectedItems as $itemName => $itemValue) {
        echo "<p>$itemName: $itemValue</p>";
    }

    // Display grand total
    echo "<p>Grand Total: {$_SESSION['grandTotal']}</p>";

    // Clear the session variables
    unset($_SESSION['selectedItems']);
    unset($_SESSION['grandTotal']);
} else {
    echo "<p>No items selected.</p>";
}
?>
