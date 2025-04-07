<?php
session_start();
include "connect.php"; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Trim the input to remove extra spaces
    $username_or_email = trim($_POST['user_number']);
    $password = $_POST['password'];

    // Use a prepared statement to safely query the database
    $stmt = $conn->prepare("SELECT * FROM user_db WHERE user_tb = ? OR email = ?");
    $stmt->bind_param("ss", $user_number_or_email, $user_number_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

   if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Make sure your registration process hashed the password with password_hash()
        if (password_verify( $row["password"],$password)) { // Verify hashed password
            $_SESSION['user_number'] = $row['user_number'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            header("Location: homepage.php"); // Redirect to welcome page
            exit();
        } else {
            echo "Invalid Password! <a href='index.php?showLogin=true'>Try again</a>";
        }
    } else {
        echo "Invalid Username or Email! <a href='index.php?showLogin=true'>Try again</a>";
    }
    
    $stmt->close();
}
$conn->close();
?>
