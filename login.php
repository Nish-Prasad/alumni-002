<?php include "connection.php"; 
session_start();

$verify=0;
$msg="";
$css_class="";

 if (isset($_GET["approve"])) {
  if ($_GET["approve"] == "successfull") {
    $msg = "*Registration successfull!";
    $css_class="alert alert-success text-center";

  }
 }


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  
    $password=filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);
    while($id_verify = mysqli_fetch_array($result)) {

      if ($username==$id_verify["reg"] && $password==$id_verify["pass"]) {
         $verify++;
      }
   }

if ($verify>0) {
   header("Location:portfolio.php");
   $_SESSION['username']=$username;

}
else{
   $msg="Wrong Username or Password";
   $css_class="alert alert-danger text-center";
    }

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
    

    <!--- Login code start --->
    <section>
    <section class="log-form">
        <div class="container">
            <div class="wrapper">
              <div class="title"><span>Login Form</span></div>
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
              <p class="<?php echo $css_class; ?>"><?php echo $msg; ?></p>  
              <div class="row">
                  <i class="fas fa-user"></i>
                  <input type="text" name="username" required>
                </div>
                <div class="row">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" required>
                </div>
                <div class="pass"><a href="forgot_pass.php">Forgot password?</a></div>
                <div class="row button">
                  <input type="submit" value="Login" name="submit">
                </div>
                <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
              </form>
            </div>
          </div>
    </section>
    </section>
    <!--- Login code end --->



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
        <li><a href="#services.php">Services</a></li>
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

