<?php
include 'connect.php'; // Ensure database connection is included

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signUp'])) {
        // Retrieve and sanitize input
        $userNumber = isset($_POST['number']) ? trim($_POST['number']) : "";
        $email = isset($_POST['email']) ? trim($_POST['email']) : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
        $retype_password = isset($_POST['retype_password']) ? $_POST['retype_password'] : "";

        // Validate required fields
        if (empty($userNumber) || empty($email) || empty($password) || empty($retype_password)) {
            echo "<script>alert('All fields are required.'); window.location.href='index.php';</script>";
            exit();
        }

        // Check if passwords match
        if ($password !== $retype_password) {
            echo "<script>alert('Passwords do not match.'); window.location.href='index.php';</script>";
            exit();
        }

        // Hash password securely
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if email already exists
        if ($stmt = $conn->prepare("SELECT * FROM user_tb WHERE email = ?")) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<script>alert('Email Address Already Exists!'); window.location.href='index.php';</script>";
                $stmt->close();
                exit();
            }
            $stmt->close();
        } else {
            die("Database query failed: " . $conn->error);
        }

        // Insert new user into database
        if ($stmt = $conn->prepare("INSERT INTO user_tb (user_number, email, password) VALUES (?, ?, ?)")) {
            $stmt->bind_param("sss", $userNumber, $email, $hashed_password);

            if ($stmt->execute()) {
                echo "<script>alert('Signup successful! Please log in.'); window.location.href='index.php?showLogin=true';</script>";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            die("Insert query failed: " . $conn->error);
        }
    }

    if (isset($_POST['signIn'])) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        // Check if user exists
        if ($stmt = $conn->prepare("SELECT * FROM user_tb WHERE email = ?")) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                session_start();
                $row = $result->fetch_assoc();

                // Verify password
                if (password_verify($password, $row['password'])) {
                    $_SESSION['email'] = $row['email'];
                    header("Location: homepage.php");
                    exit();
                } else {
                    echo "<script>alert('Incorrect Password!'); window.location.href='index.php?showLogin=true';</script>";
                }
            } else {
                echo "<script>alert('Incorrect Email or Password'); window.location.href='index.php?showLogin=true';</script>";
            }
            $stmt->close();
        } else {
            die("Sign-in query failed: " . $conn->error);
        }
    }
}

$conn->close();
?>
