<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="logo.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">Travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="destination.php">Destination</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(Swiper-Slide-img/s1.jpeg) no-repeat">
                    <div class="content">
                        <span>
                            Explore, Discover, Travel
                        </span>
                        <h3>Travel Around The World</h3>
                        <a href="destination.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Swiper-Slide-img/s3.jpeg) no-repeat">
                    <div class="content">
                        <span>
                            Explore, Discover, Travel
                        </span>
                        <h3>Discover The New Places</h3>
                        <a href="destination.php" class="btn">Discover More</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Swiper-Slide-img/s2.jpeg) no-repeat">
                    <div class="content">
                        <span>
                            Explore, Discover, Travel
                        </span>
                        <h3>Make Your Tour Worthwhile</h3>
                        <a href="destination.php" class="btn">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title">Our Services</h1>
        
        <div class="box-container">
            <div class="box">
                <img src="service-icons/adv.png" alt="">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="service-icons/location.png" alt="">
                <h3>Tour guide</h3>
            </div>
            <div class="box">
                <img src="service-icons/hiking.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="service-icons/bonfire.png" alt="">
                <h3>Camp fire</h3>
            </div>
            <div class="box">
                <img src="service-icons/off-road.png" alt="">
                <h3>Off Road</h3>
            </div>
            <div class="box">
                <img src="service-icons/tent.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>

    <!-- home about section starts  -->
    <section class="home-about">
        <div class="image">
            <img src="about.jpeg" alt="">
        </div>

        <div class="content">
            <h3>About Us</h3>
            <p>Our mission at Travel is simple: to inspire and empower adventurers of all kinds to embark on incredible journeys and 
                discover the beauty and diversity of our planet. Whether you're a thrill-seeker craving adrenaline-pumping adventures or a culture 
                enthusiast eager to immerse yourself in new traditions, we have something for everyone.</p>
            <a href ="about.php" class="btn">Read more</a>
        </div>
    </section>
    <!-- home about section ends  -->

    <!-- home destination section starts  -->
    <section class="home-packages">
        <h1 class="heading-title"> Our Destination </h1>

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="tajj.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Agra:Agra, India: Home to the iconic Taj Mahal, Agra Fort, and rich Mughal heritage and architecture.</p>
                        <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="eiffel.jpeg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>France--Paris, France: Iconic city renowned for its romantic ambiance, artistic 
                        treasures, historic landmarks, and haute cuisine delights.</p>
                        <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="pic.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Adventure & Tour</h3>
                    <p>Australia-- Vast continent offering stunning landscapes, unique wildlife,
                         diverse cultures, and vibrant cities like Sydney and Melbourne.</p>
                        <a href="book.php" class="btn">Book Now</a>
                </div>
            </div>
        </div>

        <div class="load-more"> <a href="destination.php" class="btn">Load More</a></div>
    </section>
    <!-- home destination section ends  -->
    <!-- home offer section starts  -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p></p>
            <a href="book.php" class="btn">Book Now</a>
        </div>
    </section>

    <!-- home offer section ends  -->





    <section class="footer">
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
                <a href="#"><i class="fas fa-map"></i>Coimbatore, India-642 109</a>
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
            created by <span>Binary-brains</span> | all rights reserved!
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
