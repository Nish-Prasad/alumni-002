<?php include "connection.php"; 
session_start();

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}





$sql = "SELECT * FROM profile WHERE p_reg='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
    while($id_verify = mysqli_fetch_array($result)) {

      $name=$id_verify['p_name'];
      $reg=$id_verify['p_reg'];
      $course=$id_verify['p_course'];
      $address=$id_verify['p_add'];
      $mobile=$id_verify['p_mobile'];
      $email=$id_verify['p_email'];
      $job=$id_verify['p_job'];
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
            <li><a href="log_out.php">Logout</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <label class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    </header>
    
    <!--- Other Alumni code Start --->
<div class="display_table2">
<table class="display_data2" >
  <tr>
    <th></th>
    <th>Name</th>
    <th>Dept</th>
  </tr>
<?php
$query="select * from profile";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

if($total!=0){
  while($result=mysqli_fetch_assoc($data)){
    $pimage=$result['p_image'];
    if($pimage==""){
      $pimage="placeholder-image.png";
    }
    ?>
    
    <tbody>
    <tr>
    <td><img src="<?php echo $pimage ?>" class="drop_img"></td>
    <td><?php echo $result['p_name']?></td>
    <td><?php echo $result['p_course']?></td>
    </tr></tbody>
    <?php
  }
  //echo "Table not blank";
}

?>
<a href="portfolio.php">Your profile</a>
</table>

<div>
    
</div>
</div>
<!--- Other Alumni code end --->

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
        <li><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Future Coders @2021</p>
    </section>
    <!--- Footer code end --->
    </main>
  </body>
</html>


