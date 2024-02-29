<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assuming 'name' and 'mail' are the form field names
    $name = $_POST['name'];
    $recipient = $_POST['mail'];

    $subject = "Career Form Submission";

    // Establish a connection to your MySQL database
    $mysqli = new mysqli("bxxpoqzk3juujbentkjy-mysql.services.clever-cloud.com", "uklqinemfthwbg5x", "4kf0cSUOp8agjefAF7VC", "bxxpoqzk3juujbentkjy");

    // Check the connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Escape user input
    $recipient = mysqli_real_escape_string($mysqli, $recipient);

    // Use parameterized query
    $query = "SELECT testid FROM test_for_user_careers WHERE mail=? AND teststatus='pending'";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $recipient);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the query was successful
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $testId = $row['testid'];

        // Close the database connection
        $mysqli->close();

        $message = "Dear $name,\n";
        $message .= "Thank you for submitting your career form.\n";
        $message .= "Your Test ID is: $testId\n";
        $message .= "Use this ID to start the test.\n";

        $sender = 'noreply@ramo.co.in';
        // Additional headers
        $headers = 'From:' . $sender;

        // Send the email
        if (mail($recipient, $subject, $message, $headers)) {
            // Email sent successfully
            $response = array('success' => true, 'testId' => $testId);
        } else {
            // Email sending failed
            $response = array('success' => false, 'error' => 'Error sending email');
        }
    } else {
        // No pending test found for the given email
        $response = array('success' => false, 'error' => 'No pending test found for the given email');
    }

    // Convert the response array to JSON format
    echo json_encode($response);
} else {
    // Invalid request method
    $response = array('success' => false, 'error' => 'Invalid request method');
    echo json_encode($response);
}
?>
