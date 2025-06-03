<?php
require 'database.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the application ID from the request
    $application_id = $_POST['application_id'];

    if (empty($application_id)) {
        echo json_encode(['message' => 'Application ID is required.']);
        exit;
    }

    // Prepare the SQL to call the stored procedure
    $stmt = $conn->prepare("CALL notify_company_of_application(?)");
    $stmt->bind_param("i", $application_id);

    // Execute the procedure
    if ($stmt->execute()) {
        echo json_encode(['message' => 'Company notified successfully.']);
    } else {
        echo json_encode(['message' => 'Error notifying the company.']);
    }

    $stmt->close();
}
?>
