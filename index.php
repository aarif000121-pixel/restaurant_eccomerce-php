<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- header -->
    <?php include "menubar.php"; ?>


    </div>
    <div class="container">
        <div class="container-left">
            <h1 class="pacifico-regular" style="font-size: 60px;">Let's Eat Together</h1>
            <p class="pacifico-regular" style="font-size: 30px;">The best restaurant</p>
            <br>
            <br>
            <button style="background-color: orange">View More</button>
            <button style="background-color: green">order Now</button>
            <br>
            <img src="images/chef.png" alt="food" width="35%" style="margin-top: 5%;">
        </div>

        <div class="container-right">
            <img src="images/plate.png" alt="cutlery">

        </div>

    </div>

    <!-- why choose us -->
    <center>
        <h1> Why Choose Us?</h1>
        <hr>
        <br>
        <br>
        <br>

       <div class="featured-outer" style="margin:20px; width:95%; height:200px ;display:flex; gap:20px; overflow-x:auto; white-space:nowrap; margin-left: 13%">
            <div class="featured-icon" style="min-width:200px; text-align:center; box-shadow:5px 5px 10px gray; border-radius:100px 0 100px 0;">
                <i class="fa fa-cutlery" style="color: orange;"></i>
                <br>
                <p>Fresh Food</p>
            </div>
            <div class="featured-icon" style="min-width:200px; text-align:center; box-shadow:5px 5px 10px gray; border-radius:100px 0 100px 0;">
                <i class="fa fa-clock-o" style="color: green;"></i>
                <br>
                <p>24/7 Service</p>
            </div>
            <div class="featured-icon" style="min-width:200px; text-align:center; box-shadow:5px 5px 10px gray; border-radius:100px 0 100px 0;">
                <i class="fa fa-motorcycle" style="color: orange;"></i>
                <br>
                <p>Fast Delivery</p>
            </div>
            <div class="featured-icon" style="min-width:200px; text-align:center; box-shadow:5px 5px 10px gray; border-radius:100px 0 100px 0;">
                <i class="fa fa-birthday-cake" style="color: green;"></i>
                <br>
                <p>Birthday Cakes</p>
            </div>
            <div class="featured-icon" style="min-width:200px; text-align:center; box-shadow:5px 5px 10px gray; border-radius:100px 0 100px 0;">
                <i class="fa fa-star" style="color: orange;"></i>
                <br>
                <p>Best Quality</p>
            </div>
    </center>
    </div>
    <!-- code for the dynamik gallery -->
    <br>
    <br>
    <center>
        <h1>Featured Food Items</h1>
        <hr>
        <br>
        <br>
        <br>
        <!-- <div class="featured-outer1" style="width: 1400px; display: flex; border: none; height: auto;" >
            <!-- <div class="featured-img">
                <img src="images/pizza3.jpg" alt="food1" width="" style=" width: 200px;">
            </div> -->
            <!-- <?php
//    include ("conection.php");
//    $query = "select * from featured";
//    $data = mysqli_query($conn, $query);
//    $total = mysqli_num_rows($data);
//    if($total != 0){
//     while($result = mysqli_fetch_assoc($data)){
//         // echo $result['id']."<br>";
        
//         echo "<div class='featured-img'>
//         <img src = ' ".$result['image_source']." ' width='10%' <br> </div> " ;
//     }
   
//    }  else{
//         echo "no record found";
//     }
   ?> -->

<!-- </div> -->
 

<div class="featured-outer1" style="width:1400px; display:flex; flex-wrap:wrap; justify-content:center; gap:20px; border:none; height:auto;">

<?php
include("conection.php");

$query = "SELECT * FROM featured";
$data = mysqli_query($conn, $query);

if(mysqli_num_rows($data) > 0){

    while($result = mysqli_fetch_assoc($data)){
echo "
<div style='width:20%; height:250px; border-radius:15px; overflow:hidden; margin:10px; box-shadow:0px 4px 15px rgba(0,0,0,0.3); transition:transform 0.5s ease;'
onmouseover='this.style.transform=\"scale(1.2)\"'
onmouseout='this.style.transform=\"scale(1)\"'>

    <img src='".$result['image_source']."'
    style='width:100%; height:100%; object-fit:cover; display:block; border-radius:15px;'>

</div>";  }

}else{
    echo 'No record found';
}
?>

</div>


    </center>
    <center>
        <br>
        <br>
        <h1>Our Speciality</h1>
        <hr>
        <br>
        <br>
        <br>
        <div class="content">
            <div class="left">
                <img src="images/noodles.jpg" alt="food1" width="">
            </div>
            <div class="right">For classical Latin literature from 45 BC, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                oing through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good
                and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
                during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line
                in section 1.10.32 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of
                "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book
                is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem
                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32
            </div>
    </center>
    <center>
        <br>
        <br>
        <div class="content">

            <div class="right">For classical Latin literature from 45 BC, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of
                "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book
                is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem
                going through source. Lorem
                Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good
                and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular
                during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line
                in section 1.10.32 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of
                "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book
                is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem
                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32
            </div>
            <div class="left">
                <img src="images/roll.jpg" alt="food1" width="">
            </div>
    </center>

    <center>
        <br>
        <br>
        <div class="content">
            <div class="left">
                <img src="images/noodels1.jpg" alt="food1" width="">
            </div>
            <div class="right">For classical Latin literature from 45 BC, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of
                "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book
                is a treatise  the theory of ethics, very popular during the Renaissance. The first line of Lorem
                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32 Contrary to popular belief,
                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                in professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of
                "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book
                is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem
                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32
            </div>
    </center>

    <?php include "news_letter.php"; ?>

    <?php include "footer.php"; ?>
</body>

</html>