<?php include "connection.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main>
    <header>
        <!--made changes-->
        <nav class="navigation">
            <label class="navigation-h">NBU</label>
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
            <label class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
    </header>
    <section>
    <div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="about_row">
  <div class="about_column">
    <div class="about_card">
      <img src="Nisha.jpeg" alt="Nisha" style="width:100%">
      <div class="about_container">
        <h2>Nisha Choudhary</h2>
        <p class="about_title">Content Writer & Assistant Frontend Developer</p>
        <p>Some text that describes me "Growing positively".</p>
        <p>nc161034@gmail.com</p>
        <p><button class="about_button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="about_column">
    <div class="about_card">
      <img src="Sushmita.jpeg" alt="Sushmita" style="width:100%">
      <div class="about_container">
        <h2>Sushmita Kundu</h2>
        <p class="about_title">Backend developer</p>
        <p>Some text that describes me "focused learner".</p>
        <p>kundusush20@gmail.com</p>
        <p><button class="about_button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="about_column">
    <div class="about_card">
      <img src="Nishant.jpeg" alt="Nishant" style="width:100%">
      <div class="about_container">
        <h2>Nishant Prasad</h2>
        <p class="about_title">Frontend Developer</p>
        <p>Some text that describes me "late but always great".</p>
        <p>nishantslg@gmail.com</p>
        <p><button class="about_button">Contact</button></p>
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
        <li><a href="services.php">Services</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="terms.php">Terms</a></li>
        <li><a href="privacy.php">Privacy Policy</a></li>
      </ul>
        <p class="copyright">Future Coders @2021</p>
    </section>
    <!--- Footer code end --->
    </main>
</body>
</html>

