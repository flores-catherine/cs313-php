<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>Catherine's Page</title>
    <meta name="description" content="Homepage For Catherine's CS 313">

    <link rel="stylesheet" type="text/css" href="home.css">
</head>    
<body>
    <h1>This is my homepage</h1>
    <header>
        <a href="#">CS 313 Assignments</a>
        <?php 
        //print date
        echo date("l jS \of F Y");
        ?>
    </header>
    <nav>
        <h2><a href="/cs313-php/web/project1/index.php">Project 1</a></h2>
    </nav>
    <main>
        <p>For my homepage, I decided to try something new I had never done before and make an image slideshow. I copied some code from w3schools and modified it to fit my pictures.</p>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="images/marco-catherine.jpg" alt="Catherine and Marco">
                <div class="text">My Husband and I</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="images/pb-caramel-cookie-bars3.jpg" alt="peanut butter caramel cookie bars">
                <div class="text">My Favorite Cookie Bar <a href="https://www.melskitchencafe.com/peanut-butter-caramel-chocolate-chip-cookie-bars/">Click here for recipe</a></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="images/works.jpg" alt="funny chuck norris meme">
                <div class="text">First funny meme</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="images/gosling.jpg" alt="Ryan Gosling Hey Girl Meme">
                <div class="text">Second funny meme</div>
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span> 
    </div>
    </main>
    <script src="home.js"></script>
</body>    
</html>