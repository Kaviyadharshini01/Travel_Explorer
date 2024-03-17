<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="home.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php" class="active">About</a>
            <a href="destination.php">Destination</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <div class="heading" style="background:url(ab.webp) no-repeat">
        <h1>Book Now</h1>
    </div>

    <section class="booking">
    <h1 class="heading-title">Book Your Trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>Email:</span>
                <input type="text" placeholder="Enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>Phone:</span>
                <input type="tel" placeholder="Enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>Want To Visit:</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>Days:</span>
                <input type="number" placeholder="How many days" name="guests">
            </div>

            <div class="inputBox">
                <span>Arrival Date:</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>Departure Date:</span>
                <input type="date" name="leaving">
            </div>
        </div>
        
        <button type="submit" class="btn">
    <input type="submit" class="submit" value="Submit">
</button>

    </form>
</section>


    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="destination.php"><i class="fas fa-angle-right"></i>Destination</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms Of Use</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+113-456-4090</a>
                <a href="#"><i class="fas fa-envelope"></i>Binary-brains23@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Coimbatore, India - 642 109</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>
        </div>

        <div class="credit">
            Created by <span>Binary-brains</span> | All rights reserved!
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>

  

</body>
</html>
