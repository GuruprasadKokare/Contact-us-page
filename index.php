<?php
   
   $insert = false;
        if (isset($_POST['First_Name'])) {
            # code...
        }
    $server = "localhost";
    $username = "root";
    $password ="";

    $conn = mysqli_connect($server, $username, $password);

    if(!$conn){
        die("Connection to this database is failed due to" .mysqli_connect_error());
    }

    // echo "Successfully connected to DB";

    $First_Name = $_POST['fname'];
    $Last_Name = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `contact_form`.`contact_us_form` (`First_Name`, `Last_Name`, `Phone`, `Email_id`, `Message`, `Date`) VALUES ('$First_Name', '$Last_Name', '$phone', '$email', '$msg', current_timestamp());";
    // echo $sql;

    if($conn->query($sql) == true){
        // echo "<br>Data successfully inserted";
        $insert = true;
    }

    else{
        echo "ERROR: $sql <br> $conn->error";
    }

    $conn->close();


?>

<html>
    <head>
        <title>Contact Us</title>
        
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="contactstyle.css">
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link href="/your-path-to-uicons/css/uicons-rounded-regular.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
      </head>

    <body>
        
     

      <div class="bg-img">
        
        <h2 class="text-white text-center" style="font-size: 200%;">Get in touch with us...</h2>
        <p class="text-white text-center" style="padding: 2px 25%; font-size: 105%;">
          Thank you for your interest in our services. Please fill out the form below or e-mail us at <a href = "mailto: gurukokare2002@gmail.com" class="link-mail">contact@apnicar.com</a> and we will get back to you promptly regarding your request.
        </p>
        
          <div class="box row  ">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 row">

            
              <div class="touch col-lg-12 col-md-12 col-12">
              <img src="./source/Contact us.svg" alt="logo" class="imagee">
            </div>
            
              <div class="touch col-lg-12 col-md-12 col-12">
              <h3 class="title " >Get in touch</h3>
             
             <hr class="line">
            
              <div class="box3 ">
                <i class="fa-solid fa-phone  pos-icon bord" style="display: inline-flex;"></i>
                <a href= "tel:+917719830631" class="link-color">+91 7719830631</a>
                <br>
                <i class="fa-solid fa-envelope pos-icon bord" style="display: inline-flex;"></i>
                
                <a href = "mailto: gurukokare2002@gmail.com" class="link-color">info@apnicar.com</a>
                <br>
                <i class="fa-solid fa-location-dot bord pos-icon" style="display: inline-flex;" id=""></i> 
                <a href="loc.html" class="link-color loc">Wagholi-412207, Pune</a>

                </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-12 box-in ">
              <div class="box-1">
                <form action="index.php" class="form" method="post">
                  <i class="fa-solid fa-user pos"></i>
                  <input type="text" name="fname" placeholder="First Name">
                  <i class="fa-solid fa-user pos"></i>
                  <input type="text" name="lname" placeholder="Last Name">
                  <i class="fa-solid fa-phone pos"></i>
                  
                  <input type="tel" name="phone" placeholder="Phone">
                  <i class="fa-solid fa-envelope pos"></i>
                  <input type="email" name="email" placeholder="Email">
                  <i class="fa-solid fa-bars pos-1"></i>
                  <textarea  placeholder="Message" name="msg" ></textarea>
                  <submit class="btn btn-primary butun">Send Message</submit>
                  <p class="text-muted justify-content-center ">Apni Car not sell, share, or trade customer Information.  Your privacy is very important to us</p>
                </form>
              </div>
            </div>
          </div>

      </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
