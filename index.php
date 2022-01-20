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
        <section>

            

            <div>
                <div class="slider">
                    <div class="myslider fade" style="display:block;">
                        <div class="txt">
                            <h1>Image 1</h1>
                            <p>North Bengal University Alumni Website</p>
                        </div>
                        <img src="image1.jpg"  class="sliderimg" style="width: 100%; height:100%;">
                    </div>
                    <div class="myslider fade">
                        <div class="txt">
                            <h1>Image 2</h1>
                            <p>North Bengal University Alumni Website</p>
                        </div>
                        <img src="image2.jpg" class="sliderimg" style="width: 100%; height:100%;">
                    </div>
                    <div class="myslider fade">
                        <div class="txt">
                            <h1>Image 3</h1>
                            <p>North Bengal University Alumni Website</p>
                        </div>
                        <img src="image1.jpg" class="sliderimg" style="width: 100%; height:100%;">
                    </div>
                    <div class="myslider fade">
                        <div class="txt">
                            <h1>Image 4</h1>
                            <p>North Bengal University Alumni Website</p>
                        </div>
                        <img src="image2.jpg" class="sliderimg" style="width: 100%; height:100%;">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094</a>
                    <a class="next" onclick="plusSlides(1)">&#10095</a>


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
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="terms.php">Terms</a></li>
        <li><a href="privacy.php">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Future Coders @2021</p>
    </section>
    <!--- Footer code end --->

                    <div class="dotsbox" style="text-align:center;">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
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