<?php
session_start();
include("connect.php");

// Check if the user is logged in
if (!isset($_SESSION['user_email'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

$email = $_SESSION['user_email'];

// Fetch user details from the database
$query = $conn->prepare("SELECT * FROM user_tb WHERE email = ?");
$query->bind_param("s", $email);
$query->execute();
$result = $query->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userNumber = $row['userNumber'];
} else {
    die("Error: User not found.");
}

$query->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Network</title>
    <link rel="stylesheet" href="new testing2.css">
</head>
<body>
    
    <!-- Nav Section Start -->
    <header class="header">

        <a href="#" class="logo">
            <img src="images/honda image2.jpg" alt="Honda logo" width="100" height="50">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#products">products</a>
        </nav>

        
        <button type="button" class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>

    


    </header>
    <!-- Nav Section End -->
    
            

    <!-- About Section Start -->
    

    <section class="about" id="about">
        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/honda_racing_cover.png" alt="">
            </div>

            <div class="content">
                <h2>who is honda motors philippines?</h2>
                <h3>Honda Motors Philippines</h3>
                <p>Honda Motors Philippines is a leading automotive and motorcycles brand in the Philippines, offering a
                    wide range of vehicles and services to our customers. Our mission is to provide reliable,
                    affordable, and convenient transportation solutions for our customers.</p>
                <p>Founded in 1958, Honda Motors Philippines has consistently been committed to creating innovative,
                    sustainable, and environmentally friendly vehicles that meet the needs of our customers. Our
                    commitment to quality, safety, and sustainability is at the core of our business.</p>

            </div>
        </div>

    </section>


    <!-- About Section End -->
              


    
    <!-- Menu section Starts Here-->

    <section class="menu" id="menu">

        <h1 class="heading"> <span>our</span> menu </h1>

        <div class="box-container">

            <div class="box">

                <img src="images/WAVE-ALPHA-2.jpg" alt="">
                <h3>Revamp Classic</h3>
                <div class="price">₱41,799 <br><span>₱45,799</span></div>
                <a href="#" class="btn">order now</a>

            </div>

            <div class="box">

                <img src="images/Wave-DRUM-1.jpg" alt="">
                <h3>Gas Saver</h3>
                <div class="price">₱53,699 <br><span>₱56,699</span></div>
                <a href="#" class="btn">order now</a>

            </div>

            <div class="box">

                <img src="images/WAVE-110-2.jpg" alt="">
                <h3>Road King</h3>
                <div class="price">₱80,799 <br><span>₱82,799</span></div>
                <a href="#" class="btn">order now</a>

            </div>

            <div class="box">

                <img src="images/RS150R-red-07.webp" alt="">
                <h3>Hyper Underbone</h3>
                <div class="price">₱129,799 <br><span>₱135,799</span></div>
                <a href="#" class="btn">order now</a>

            </div>

        </div>

    </section>

    <!-- Menu section Ends Here-->

    <!-- Footer Section start -->
    <section class="footer">
        <h1 class="text-center"><span>Honda Motors</span> Philippines</h1>
        <h3 class="text-center">@Honda Motors Philippines 2025 |All Rights Reserved</h3>
    </section>

    <!-- Footer Section End -->
    <script src="new testing.js"></script>

    
</body>
</html>