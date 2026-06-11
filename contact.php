<?php include 'conection.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div id="menu">
        <!-- header -->
       <?php include "menubar.php"; ?>
    </div>
    <div class="container">
        <div class="container-left">
            <h1 class="pacifico-regular" style="font-size: 60px; color: orange; font-size: 60px;">Order Now</h1>
            <p class="pacifico-regular" style="font-size: 30px; ">The best restaurant</p>
            <br>
            <br>
            <!-- <button style="background-color: orange">View More</button> -->
            <button style="background-color: green; width: 350px;"><a href="tel:+919560584357"> Call now
                </a></button>
            <br>
            <img src="images/contactperson1.jpg" alt="food" width="60%" style="margin-top: 3%; ; height: 50%;">
        </div>

        <div class="container-right3" style="margin-top: 4%";>
            <div class="form">
                <form action="#" method="post">
                    <input type="text" placeholder="Enter Your Name" name="name" required>
                    <br>
                    <input type="text" placeholder="Enter Your Email" name="email" required>
                    <br> <input type="text" placeholder="Enter Your Phone Number" name="contact" required>
                    
                    <br>
                    <select  name="gender" id="">
                        <option value="not selected" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>



                    <br>
                    <textarea placeholder="Plese Write Your Requirements" name="message"></textarea>
                    <br>
                    <input type="Submit" value="submit" name="submit" style="background-color: orange; width: 570px; height: 50px; color: white; font-size: 30px; border: none; cursor: pointer;">
                    <br>
                    <p>Adress: New Delhi Uttam Nagar 110059
                        <br>
                        Phone: +91 986959433
                        <br>
                        email: example@gmail.com
                    </p>
                </form>
            </div>

        </div>

    </div>




  <?php include "news_letter.php"; ?>

  

        <?php include "footer.php"; ?>

</body>

</html>

</body>

</html>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];

    $query = "insert into contact(name, email, contact, gender, message) values ('$name', '$email', '$contact','$gender', '$message')";
    $data = mysqli_query($conn, $query);

    if($data){
        echo '<script>alert("data transfered")</script>';
    ?>
    <meta http-equiv="refresh" content="0; url=index.php">

    <?php

    } else {
        echo '<script>alert("data not transfer")</script>';
    }
}
?>