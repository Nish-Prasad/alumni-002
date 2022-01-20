<?php include "connection.php"; 
session_start();

if(!isset($_SESSION['username'])){
  $tagname="Login";
  $linkname="login.php";
  
}else{
  $linkname="log_out.php";
  $tagname="Logout";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>


    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <header>
            <nav class="navigation">
                <label class="navigation-h">NBU <apan style="color:white;">Alumni</span></label>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="<?php echo $linkname ?>"><?php echo $tagname ?></a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                </ul>
                <label class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>
            </nav>
        </header>
        <section class="homebody">
            <div class="home">
            <div class="home-img">
                <div><img src="image2.jpg"></div>
                <div >
                    <p><button class="about_button"> Notices and Circulars</button></p>
                    <div class="about_container">

                        <p class="about_title"><a href="#">Techno Fest</a></p>
                        <p><a href="#">Techno Fest</a></p>
                        <p><a href="#">Techno Fest</a></p>
                        <p><a href="#">Techno Fest</a></p>
                        <p><a href="#">Techno Fest</a></p>

                    </div>
                </div>
            </div>
            <div class="about_row">
                <div class="about_column">
                    <div class="about_card">
                        <p><button class="about_button">Event</button></p>
                        <div class="about_container">

                            <p class="about_title"><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>

                        </div>
                    </div>
                </div>

                <div class="about_column">
                    <div class="about_card">
                        <p><button class="about_button">Event</button></p>
                        <div class="about_container">

                            <p class="about_title"><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>

                        </div>
                    </div>
                </div>

                <div class="about_column">
                    <div class="about_card">
                        <p><button class="about_button">Event</button></p>
                        <div class="about_container">

                            <p class="about_title"><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>
                            <p><a href="#">Techno Fest</a></p>

                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>
        <!--- Footer code start --->
        <section class="footer">
            <div class="social">
                <a href="#"><i class="fab fa-instagram"></i> </a>
                <a href="#"><i class="fab fa-snapchat"></i> </a>
                <a href="#"><i class="fab fa-twitter"></i> </a>
                <a href="#"><i class="fab fa-facebook"></i> </a>
            </div>
            <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Future Coders @2021</p>
        </section>
        <!--- Footer code end --->

    </main>
</body>

</html>