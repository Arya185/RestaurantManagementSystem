<?php require "header.php"; ?>

<header class="header">
    <div class="row">
        <div class="col-md-12 text-center">
            <a class="logo" href="#"><img src="img/logo2.png" alt="logo"></a>
        </div>
        <div class="col-md-12 text-center">
            <a href="reservation.php" class="btn btn-outline-light btn-lg"><em>Make a Reservation Now!</em></a>
            <a href="food.php" class="btn btn-outline-light btn-lg"><em>Let's Order Now!</em></a>
        </div>
    </div>
</header>

<section id="aboutus">
    <div class="container">
        <h3 class="text-center"><br><br>SliceIt</h3>
        <div class="row">
     <div class="col-sm"><br><br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
        <div class="carousel-inner">
           <div class="carousel-item active">
             <img class="d-block w-100" src="img/3.jpeg" alt="First slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/chhola.jpg" alt="Second slide">
           </div>
           <div class="carousel-item">
           <img class="d-block w-100" src="img/masala.jpg" alt="Third slide">
           </div>
        </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div><br><br>
     </div>

     <div class="col-sm">
     <div class="arranging"><br><br>
  <h4 class="text-center">Our Story</h4>
  <p><br>SliceIt is a comprehensive restaurant management system designed to streamline operations and enhance efficiency in food establishments. With features tailored for various aspects of restaurant management, it offers functionalities for order management, inventory tracking, employee scheduling, and customer relationship management. SliceIt's intuitive interface allows users to easily navigate through tasks such as menu customization, table reservations, and payment processing. Its analytics tools provide valuable insights into sales trends and customer preferences, aiding in strategic decision-making.<br><br>
  With its cloud-based platform, SliceIt ensures seamless accessibility and data security, making it an indispensable tool for optimizing restaurant performance and delivering exceptional dining experiences. Whether managing a small bistro or a large-scale restaurant chain, SliceIt offers scalable solutions to meet the unique needs of any establishment. By automating repetitive tasks and centralizing operations, SliceIt empowers restaurant owners and managers to focus more on delivering high-quality cuisine and memorable customer service, ultimately driving business growth and success in the competitive food industry.<br><br><br></p><br>
  </div>
     </div>
    </div><br>
  </div>
</section>


<<!DOCTYPE html>
<html>
<head>
    <title>Feedback and Review Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container1 {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
      .container2 {
          max-width: 750px;
          margin: 50px auto;
          background-color: #fff;
          padding: 20px;
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
        h2 {
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            display: block;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        .error {
            color: red;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .rating {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .rating label {
            margin-right: 10px;
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }
        .rating input[type="radio"] {
            display: none;
        }
        .rating label:hover,
        .rating label:hover ~ label {
            color: #ff9f00;
        }
        .rating input[type="radio"]:checked ~ label,
        .rating input[type="radio"]:checked ~ label:hover {
            color: #ff9f00;
        }
        .previous-feedback {
            margin-top: 40px;
        }
        .previous-feedback h3 {
            margin-bottom: 10px;
        }
        .previous-feedback .review {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }
        .previous-feedback .review:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <div class id="Review"><br>
<div class="container1">
    <h2>Feedback and Review Form</h2>

    <?php
    $name = $email = $feedback = $rating = "";
    $name_err = $email_err = $feedback_err = $rating_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $name_err = "Please enter your name.";
        } else {
            $name = test_input($_POST["name"]);
        }

        // Validate email
        if (empty($_POST["email"])) {
            $email_err = "Please enter your email.";
        } else {
            $email = test_input($_POST["email"]);
        }


        if (empty($_POST["feedback"])) {
            $feedback_err = "Please enter your feedback.";
        } else {
            $feedback = test_input($_POST["feedback"]);
        }


        if (empty($_POST["rating"])) {
            $rating_err = "Please select a rating.";
        } else {
            $rating = test_input($_POST["rating"]);
        }

        if (empty($name_err) && empty($email_err) && empty($feedback_err) && empty($rating_err)) {

            echo "<h3>Thank you for your feedback!</h3>";
            echo "<p>Name: $name</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Feedback: $feedback</p>";
            echo "<p>Rating: $rating stars</p>";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error"><?php echo $name_err; ?></span>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <span class="error"><?php echo $email_err; ?></span>
        </div>
        <div class="form-group">
            <label>Feedback:</label>
            <textarea name="feedback"><?php echo $feedback; ?></textarea>
            <span class="error"><?php echo $feedback_err; ?></span>
        </div>
        <div class="form-group">
            <label>Rating:</label>
            <div class="rating">
                <?php

                for ($i = 5; $i >= 1; $i--) {
                    echo "<input type='radio' id='star$i' name='rating' value='$i'";
                    if ($rating == $i) {
                        echo " checked";
                    }
                    echo "><label for='star$i'>&#9733;</label>";
                }
                ?>
            </div>
            <span class="error"><?php echo $rating_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
  
    <div class="previous-feedback">
        <h3>Previous Feedback and Reviews</h3>
      <div class="container2">
            <p><strong>Name:</strong> Navjot Singh Shron </p>
            <p><strong>Email:</strong> nss@gmail.com</p>
            <p><strong>Feedback:</strong> Soooo good!! It is a must try.</p>
            <p><strong>Rating:</strong> 4 stars</p>
        </div>
    </div>
    <div class="container2">
          <p><strong>Name:</strong> Renny Prajapati</p>
          <p><strong>Email:</strong> renny@gmail.com</p>
          <p><strong>Feedback:</strong> It possesses both positive and negative Features</p>
          <p><strong>Rating:</strong> 3 stars</p>
      </div>
    </div>
</div>

</body>


<div class="header2">
</div>

<div class id="Food"><br>
    <div class="container">
    <h3 class="text-center"><br>Food<br><br></h3>
        <div class="d-flex flex-row flex-wrap justify-content-center">
           <div class="d-flex flex-column">
              <img src="img/chhola.jpg" class="img-fluid">
              <img src="img/8.jpeg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
              <img src="img/3.jpeg" class="img-fluid">
              <img src="img/gujrati.jpeg" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/masala.jpg" class="img-fluid">
               <img src="img/home-img-3.png" class="img-fluid">
           </div>
           <div class="d-flex flex-column">
               <img src="img/idli.jpg" class="img-fluid">
               <img src="img/dosa.jpg" class="img-fluid">
           </div>
        </div>
        <button type="button" onclick="window.location.href='food.php'" class="btn btn-outline-dark btn-block btn-lg">Let's Order Now!</button>
    </div>
</div><br><br>


<div class="container" id="reservation">
    <h3 class="text-center"><br><br>Reservation<br><br></h3>
    <img  src="img/16.jpg" class="img-fluid rounded">
    <button type="button" onclick="window.location.href='reservation.php'" class="btn btn-outline-dark btn-block btn-lg">Make a reservation Now!</button>

</div><br><br>

<div class="header2">
</div>

<section class="map" id="footer">
    <div class="container">
    <h3 class="text-center"><br><br>Find us!</h3><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.600354076793!2d72.87373247519282!3d19.299738144910563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b01633d596dd%3A0x5846eeeb84dd563f!2sShree%20L%20R%20Tiwari%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1711692553457!5m2!1sen!2sin" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        <div class="row staff">
            <div class="col">
            <h4><strong>Opening Hours</strong></h4>

                <div class="signup-form">
                    <form action="#footer" method="post">
                        <div class="form-group">
                            <label>Enter Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Date" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check_schedule" class="btn btn-dark btn-block">Check Open Time</button>
                        </div>
                    </form>

<?php

if(isset($_POST['check_schedule'])){

require 'includes/dbh.inc.php';

$date= $_POST['date'];

    $sql = "SELECT * FROM schedule WHERE date = '$date'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        while($row = $result->fetch_assoc()) {
            echo"
                <table class='table table-sm table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>".$row['open_time']."</td>
                    <td>".$row['close_time']."</td>
                    </tr>
                   </tbody>
                </table>";
                }
            }
        else{
         echo"
                <table class='table table-striped table-dark text-center'>
                   <thead>
                    <tr>
                    <th scope='col'>Date</th>
                    <th scope='col'>Open Time</th>
                    <th scope='col'>Close Time</th>
                    </tr>
                   </thead>
                   <tbody>
                    <tr>
                    <th scope='row'><em>". $date . "</em></th>
                    <td>12:00</td>
                    <td>00:00</td>
                    </tr>
                   </tbody>
                </table>";
            }

   mysqli_close($conn);
}
?>

                </div><br>
            </div>

            <div class="col">
            <h4 class="text-right"><strong>Visit Us</strong></h4>
            <p class="text-right">SliceIt<br><i class="fa fa-map-marker"></i>&nbsp; SLRTCE <br>CMPN <br><br>email: info@domain.com<br>phone: +00 (123) 456 7890</p>
            </div>

  </div>
    </div>
</section>

<?php
require "footer.php";
?>