<?php include "connection.php"; 
session_start();

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}





$sql = "SELECT * FROM profile WHERE p_reg='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
    while($id_verify = mysqli_fetch_array($result)) {

      $name=$id_verify['p_name'];
      $email=$id_verify['p_email'];
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <main>
    <header>
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

    
    
    <section class="log-form">
        <div class="container">
            <div class="wrapper">
              <div class="title"><span>Login Form</span></div>
              <form method="POST" action="#">
              <p class="alert alert-danger text-center"></p>  
              <div class="row">
                  <input type="text" name="username" required>
                </div>
                <div class="row">
                  <input type="text" name="email" required>
                </div>
                <div class="pass"><a href="login.php">login</a></div>
                <div class="row button">
                  <input type="submit" value="Login" name="submit">
                </div>
                <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
              </form>
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
