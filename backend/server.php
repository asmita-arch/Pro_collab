<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data safely
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Simple validation
    if (empty($name) || empty($email)) {
        echo "All fields are required!";
        exit();
    }

    // Display received data
    echo "<h2>Form Submitted Successfully!</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;

} else {
    echo "Invalid Request!";
}

?>