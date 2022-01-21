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
            <li><a href="<?php echo $linkname ?>"><?php echo $tagname ?></a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
            <label class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
    </header>
    <section>
        <div class="terms_container">
            <h1><center>Terms of policy<center></h1><br><br>
            <p>
                THESE TERMS OF SERVICE (THE “TERMS”) ARE AN AGREEMENT BETWEEN COMPANY  AND YOU, OR, IF YOU REPRESENT AN
                  ENTITY OR OTHER ORGANIZATION, THEN THAT ENTITY OR ORGANIZATION (IN EITHER CASE “YOU” OR “YOUR”). 
                   BY CLICKING ON THE “START MY TRIAL” BUTTON, EXECUTING AN ORDER FORM, OR BY ACCESSING OR USING THE SITE
                    OR SERVICES (AS DEFINED BELOW) EITHER THROUGH A FREE TRIAL OR AS A PAID SUBSCRIBER, YOU<br><br> (A) AGREE TO
                     BE BOUND BY THESE TERMS GOVERNING YOUR USE OF THE SERVICES OFFERED BY COMPANY AVAILABLE THROUGH THE
                      SITE, WHETHER AS A GUEST OR A REGISTERED USER;<br><br> (B) ARE NOT, NOR ARE ANY OF YOUR AFFILIATES, 
                      A COMPETITOR OF TEAMSUPPORT OR SNAPENGAGE,<br><br> (C) HAVE READ AND UNDERSTAND THESE TERMS; AND<br><br> (D) 
                      REPRESENT THAT YOU ARE OF LEGAL AGE TO ENTER INTO A BINDING AGREEMENT AND IN ANY CASE, AT LEAST 18
                       YEARS OF AGE.<br><br>IF YOU ARE ENTERING INTO THE AGREEMENT OR OTHERWISE USING THE SITE OR SERVICES FOR 
                       OR ON BEHALF OF A COMPANY OR OTHER LEGAL ENTITY, YOU REPRESENT THAT YOU HAVE THE AUTHORITY TO BIND
                        SUCH ENTITY TO THESE TERMS. IF YOU DO NOT HAVE SUCH AUTHORITY, OR IF YOU DO NOT AGREE WITH THESE 
                        TERMS, YOU MUST CEASE USE OF THE SITE AND SERVICE, CANCEL THE ORDERING PROCESS, AND MAY NOT USE 
                        THE SERVICE, EVEN FOR THE TRIAL PERIOD (IF ANY). BY USING THE SITE OR SERVICE, YOU ACCEPT AND 
                        AGREE TO BE BOUND AND ABIDE BY THE AGREEMENT.
            </p>
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



