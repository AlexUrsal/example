<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Use font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Your CSS stylesheet goes here -->
    <link rel="stylesheet" href="new testing3.css">


</head>

<body>

    <!-- Header section Starts Here -->

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

        <div class="icons">
            <div class="fa-regular fa-circle-user" id="login-btn"></div>

            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

        <div class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </div>


        <!---Sign Up/Sign In--->
        <div class="login-items-container">
            <div class="container" id="container">
                <div class="form-container sign-up">
                    <form action="register.php" method="post">
                        <h1>Create Account</h1>
                        <div class="social-icons">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        </div>
                        <span>or use your email for registration</span>
                        <input type="number" placeholder="Number" name="number">
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <input type="password" placeholder="Re-type Password" name="retype_password">
                        <button type="submit" value="Sign Up" name="signUp">Confirm</button>
                    </form>
                </div>


                <!---Sign In--->
                <div class="form-container sign-in">
                    <form action="homepage.php" method="post">
                        <h1>Sign In</h1>
                        <div class="social-icons">
                            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        </div>
                        <span>or use your email password</span>
                        <input type="email" placeholder="Email" name="email">
                        <input type="password" placeholder="Password" name="password">
                        <a href="#" class="forgot-password">Forgot password?</a>
                        <button type="submit" name="signIn">Log In</button>
                    </form>
                </div>


                <div class="toggle-container">
                    <div class="toggle">
                        <div class="toggle-panel toggle-up">
                            <h1>Hello Friend!</h1>
                            <p>Enter your personal details to use all of site features</p>
                            <button class="hidden" id="login">Sign Up</button>
                        </div>

                        <div class="toggle-panel toggle-down">
                            <h1>Welcome Back!</h1>
                            <p>Register with your personal details to use all of site features</p>
                            <button class="hidden" id="register" name="Sign Up">Sign In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <!-- Home section Starts Here -->

    <section class="home" id="home">

        <div class="content">
            <h3>Honda Motors Philippines</h3>
            <p> "We are a leading automotive & motorcycles brand in the Philippines, offering a wide range of vehicles
                and services to our customers."</p>
            <h4>Honda "Reliability at it's Finest"</h4>
            <a href="#" class="btn">get yours now</a>
        </div>
    </section>
    <!-- Home section Starts Here -->

    <!-- About section Starts Here -->

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

    <!-- About section Ends Here -->

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


    <!-- Menu Section Ends Here -->

    <!-- Footer Section -->
    <section class="footer">
        <h1 class="text-center"><span>Honda Motors</span> Philippines</h1>
        <h3 class="text-center">@Honda Motors Philippines 2025 |All Rights Reserved</h3>
    </section>




    <!-- JavaScript -->
    <<script>
        let navbar = document.querySelector('.navbar');
        
        let loginContainer = document.querySelector('.login-items-container'); 
        const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');
        const loginButton = document.getElementById('login-btn');

        // Menu button
        document.querySelector('#menu-btn').onclick = () => {
            navbar.classList.toggle('active');
            searchForm.classList.remove('active'); 
            cartItem.classList.remove('active'); 
            loginContainer.classList.remove('active');
        }

        

       
        //Login button
        loginButton.addEventListener('click', () => {
            loginContainer.classList.toggle('active');
            navbar.classList.remove('active'); 
            searchForm.classList.remove('active'); 
            cartItem.classList.remove('active');
        });

        // Event listener to switch to the "Sign Up" form
        registerBtn.addEventListener('click', () => {
            container.classList.add("active"); 
        });

        // Event listener to switch to the "Sign In" form
        loginBtn.addEventListener('click', () => {
            container.classList.remove("active"); 
        });

        // Close the menu, search, cart, and login when the user scrolls
        window.onscroll = () => {
            navbar.classList.remove('active');
            
            loginContainer.classList.remove('active');
        }
        // Close login form when clicking outside
        document.addEventListener('click', (event) => {
            const isClickInside = loginContainer.contains(event.target) || loginButton.contains(event.target);

            if (!isClickInside) {
                loginContainer.classList.remove('active');
            }
        });

    </script>

</body>
</html>