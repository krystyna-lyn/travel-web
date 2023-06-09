<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.web</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url(img/slide1.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Discover around the world</h3>
                        <div class="btn">discover more</div>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(img/slide2.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Discover new places</h3>
                        <div class="btn">discover more</div>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url(img/slide3.jpg) no-repeat;">
                    <div class="content">
                        <span>Explore, discover, travel</span>
                        <h3>Make your tour worthwhile</h3>
                        <div class="btn">discover more</div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <section class="services">
        <h1 class="heading-title"> Our services</h1>
        <div class="box-container">

            <div class="box">
                <img src="img/adventure.png" title="mountain icon">
                <h3>Adventure</h3>
            </div>
            <div class="box">
                <img src="img/location.png" alt="map">
                <h3>Tour guide</h3>
            </div>
            <div class="box">
                <img src="img/fire.png" alt="fire">
                <h3>Camp fire</h3>
            </div>
            <div class="box">
                <img src="img/jeep.png" alt="off road">
                <h3>Off road</h3>
            </div>
            <div class="box">
                <img src="img/trekking.png" alt="trekking">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="img/camping.png" alt="camping">
                <h3>Camping</h3>
            </div>

        </div>
    </section>

    <section class="about">
        <div class="image">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Reiciendis dolore eius reprehenderit quis debitis!
                Quasi earum, autem, amet consectetur possimus fuga
                voluptatum nostrum, modi exercitationem esse aperiam
                dignissimos. Libero nisi delectus laboriosam pariatur
                modi ducimus, tenetur officia hic, dolorum nobis totam
                nam assumenda voluptatum exercitationem?</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <section class="packages">
        <h1 class="heading-title">Our packages</h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="img/img1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Anventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, necessitatibus? Aspernatur
                        minus quaerat eius error cum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="img/img2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Anventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, necessitatibus? Aspernatur
                        minus quaerat eius error cum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>
            <div class="box">
                <div class="image">
                    <img src="img/img3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Anventure & Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, necessitatibus? Aspernatur
                        minus quaerat eius error cum?</p>
                    <a href="book.php" class="btn">book now</a>
                </div>

            </div>
        </div>


        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

    <section class="offer">
        <div class="content">
            <h3>Upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo facilis animi quaerat sed eveniet earum iste nesciunt, deleniti in similique!</p>
            <a href="book.php" class="btn">book now</a>
        </div>
    </section>


    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> FAQ</a>
                <a href="home.php"><i class="fas fa-angle-right"></i> About us</a>
                <a href="home.php"><i class="fas fa-angle-right"></i> Private policy</a>
                <a href="home.php"><i class="fas fa-angle-right"></i> Terms of use</a>
            </div>

            <div class="box">
                <h3>Contact info</h3>
                <a href="home.php"><i class="fas fa-phone"></i> +49 003 45678</a>
                <a href="home.php"><i class="fas fa-phone"></i> +49 003 45678</a>
                <a href="home.php"><i class="fas fa-envelope"></i> travel-agency@info.com</a>
                <a href="home.php"><i class="fas fa-map"></i> Berlin, Deutschland</a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="home.php"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="home.php"><i class="fab fa-twitter"></i> twitter</a>
                <a href="home.php"><i class="fab fa-instagram"></i> instagram</a>
                <a href="home.php"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit"> created by <span>Krys Lyn</span> | all rights reserved</div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>