<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM clncpet WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap 5 css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <!-- BOX ICONS CSS-->
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
  <!-- custom css -->
  <link rel="stylesheet" href="assets/style.css" />
  <title>Vet Care Project</title>
    <!--FONTS
    font-family: 'Prata', sans-serif;
    font-family: 'Lato', sans-serif;
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prata&display=swap" rel="stylesheet">



  </head>

<body>
  <!-- Side-Nav -->
  <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="#" class="nav-link h3 text-white my-2">
     <img src="assets/pawLogo-min.png" width="225" height="200"/> </br><p class="text-center mt-3">Pet Care  Animal Clinic</p>
      </a>
      <li>
        <a href="index.php" class="nav-link text-white"><i class="bx bxs-dashboard"></i>
        <span class="mx-2">Home</span></a>
      </li>
      <li>
        <a href="about.php" class="nav-link text-white"><i class="bx bx-user-check"></i>
        <span class="mx-2">About Us</span></a>
      </li>
      <li>
        <a href="services.php" class="nav-link text-white"><i class="bx bx-user-check"></i>
        <span class="mx-2">Services</span></a>
      </li>
      <li>
        <a href="contactUs.php" class="nav-link text-white"><i class="bx bx-conversation"></i>
        <span class="mx-2">Book Appointment</span></a>
      </li>
       <li>
        <a href="logout.php" class="nav-link text-white"><i class="bx bx-log-out"></i>
        <span class="mx-2">Click to Log Out</span></a>
      </li>

    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5 text-center">
        <h5>Follow Us:</h5>
      <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
      <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
      <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
  </div>

  <!-- Main Wrapper -->
<div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
      <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
      <p style="font-family: 'Prata', serif; font-size:35px; color: #5c3d2e;">Logged in :-<?php echo $row["fname"]; ?> &emsp; ID:- <?php echo $row["email"]; ?></p>
    
    </nav>
    <!--End Top Nav -->
   

    <!--CONTACT US CONTENTS-->
    <section class="mb-5 py-3">
        
            
      

<div class="container-contact">

    <div class="wrap-header">
        <h1 style="color: #5c3d2e; font-family: 'Lato', sans-serif; "><b>CONTACT</b> US</h1>
          <div class="hero-text"><i>Got any Questions? Feel free to ask or visit <br> our FAQ page</i></div>  
    </div>
  
    <div class="wrap-contact">
      <form name="contact" class="contact-form validate-form" method="post" action="function.php">

        <div class="wrap-input validate-input" data-validate="Please enter your name">
          <input class="input" type="text" name="fname" placeholder="Full Name" required>
        </div>

        <div class="wrap-input validate-input" data-validate="Please enter appointment date">
          <input class="input" type="number" maxlength="8" name="date" placeholder="Enter date to book appointment;(DD/MM/YYYY)" required>
        </div>

        <div class="wrap-input validate-input" data-validate = "Please enter your email">
          <input class="input" type="text" name="email" placeholder="E-mail" required>
        </div>
        <div class="wrap-input validate-input" data-validate = "Please enter your phone number">
          <input class="input" type="number" maxlength="12" name="phone" placeholder="Phone number" required>
        </div>
        <div class="wrap-input validate-input" data-validate = "Please enter your message">
          <textarea class="input" type="text" name="message" placeholder="Enter reason for Appointment" required></textarea>
        </div>

        <div class="container-contact-form-btn">
          <button type="submit" name="submit" class="contact-form-btn">
            <span>Send</span>
          </button>
        </div>

        <div class="grid-container">
          <div class="item1" style="font-size: 13px; text-align: center; width:100%"><i class='bx bx-location-plus'></i> 4517 Salcedo Street, Makati, Metro Manila <br> <i class='bx bx-envelope'></i> paws&tails@gmail.com <br> <i class='bx bx-phone' ></i> (098) 556-7890 </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>

    <!--EOF CONTACT US -->

    <!-- Footer-->
    <footer class="footer py-3">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; 2023 - Pet Care Project</p></div>
        </footer>
</div><!--EOF MAIN CONTAINER-->

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>