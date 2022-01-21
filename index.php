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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <div class="about-section">
                <img src="image2.jpg">
                <h1>North Bengal University</h1>
                <p>Alumni Website</p>
                <p>Place memories were created</p>
            </div>

            <h2 style="text-align:center">Login to view Alumni</h2>
            <div class="about_row">
                <div class="about_column">
                    <div class="about_card">
                        <p><button class="about_button">Notices and circulum</button></p>
                        <div class="about_container">
                            
                            <p>Sealed quotations are invited for supply of Papers at University Press.</p>
                            <p>Repair and maintenance of room nos. 239, 345, 342 & 353 at Department of Chemistry at N.B.U. Campus</p>
                            <p>Recruitment of a Laboratory Assistant in ICMR, Govt. of India sponsored research project (IRIS ID:-2020-2501) in the Department of Bio Technology</p>
                        </div>
                    </div>
                </div>

                <div class="about_column">
                    <div class="about_card">
                        <p><button class="about_button">Upcoming Events</button></p>
                        <div class="about_container">
                            
                            <p >P.G. & U.G. 2nd, 4th, 6th Semester Examinations, 2021 (Under Distance Education Mode) scheduled to be held from 08-02-2022</p>
                            <p>Notification regarding examination schedule of P.G. 1st Semester Examinations, 2021</p>
                            <p>Notification regarding word limit for answer script in forthcoming UG Law Examination</p>
                        </div>
                    </div>
                </div>

                <div class="about_column">
                    <div class="about_card">
                        <p><button class="about_button">Students' Zone</button></p>
                        <div class="about_container">
                            
                            <p>Anti-Ragging Cell</p>
                            <p>Scholarships and Fellowships</p>
                            <p>Placement Cell</p>
                            <p>Students Grievance Cell</p>
                            <p>Alumni Association</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-home">
                <div class="f-home1" style="background-color: #DC68BF;"><i class="fas fa-university">Affiliated Colleges</i></div>
                <div class="f-home1" style="background-color: #DADF50;"><i class="fas fa-list-alt">Services & Amenities</i></div>
                <div class="f-home1" style="background-color: #8CCC7A;"><i class="fas fa-graduation-cap">Distance Education</i></div>
                <div class="f-home1" style="background-color: #FCCE00;"><i class="fas fa-check-square">UGC-HQ</i></div>
                <div class="f-home1" style="background-color: #979797;"><i class="fas fa-users">Connection</i></div>
                <div class="f-home1" style="background-color: #57B2D8;"><i class="fas fa-book">University Publications</i></div>
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