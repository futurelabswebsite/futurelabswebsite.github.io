<?php
// Highly insecure method, for educational purposes only

$credentialsFile = 'passwords.txt';

// Read credentials from file
$credentials = file($credentialsFile);
$username = trim($credentials[0]);
$password = trim($credentials[1]);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedUsername = $_POST['username'];
    $submittedPassword = $_POST['password'];

    if ($submittedUsername === $username && $submittedPassword === $password) {
        // Replace password with placeholder
        $newCredentials = "Username:\ninsert text here\n";
        file_put_contents($credentialsFile, $newCredentials);

        // Redirect to download page
        header('Location: download.php');
        exit;
    } else {
        // Incorrect credentials
        echo "Incorrect!";
    }
}
?>
