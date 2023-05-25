<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel.web</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
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

<h1 class="heading" style="background: url(img/cover.jpg) no-repeat;">
    Book your trip now!
</h1>

<section class="booking">
    <form action="book_form.php" method="post">
        <div class="inputBox">
            <input type="text" placeholder="Enter your name" name="name">
        </div>
        <div class="inputBox">
            <input type="email" placeholder="Enter your email" name="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="Enter your phone" name="phone">
        </div>

        <div class="inputBox">
            <input type="text" placeholder="Enter your address" name="address">
        </div>
        <div class="inputBox">
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="Number of guests" name="guests">
        </div>
        <div class="inputBox">
            <input type="date" name="arrivals"  value="<?php echo date('Y-m-d') ?>">
            <input type="date" name="leaving"  value="<?php echo date('Y-m-d') ?>">
        </div>

        <input type="submit" value="submit" class="btn" name="send" >
    </form>

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
        <a href="home.php"><i class="fas fa-angle-right"></i> Abuot us</a>
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