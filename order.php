<?php include 'conection.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
     <!-- header -->
       <?php include "menubar.php"; ?>
       
    <div class="container">
        <div class="container-left">
            <h1 class="pacifico-regular" style="font-size: 60px; color: orange; font-size: 60px;">Order Now</h1>
            <p class="pacifico-regular" style="font-size: 30px; ">The best restaurant</p>
            <br>
            <br>
            <!-- <button style="background-color: orange">View More</button> -->
            <button style="background-color: green; width: 350px;"><a href="tel:+919560584357">Order Over Call
                </a></button>
            <br>
            <img src="images/chef.png" alt="food" width="60%" style="margin-top: -13%; ; height: 55%;">
        </div>

        <div class="container-right3" style="margin-top: 1%; border: px solid red;">
            <div class="form" style="margin-top: -25%; height: 300px; border:  px solid red;">
                <form action="#" method="POST">
                    <input type="text" placeholder="Enter Your Name" required name="name">
                    <br>
                    <select name="table_no" id="">
                        <option value="not selected" disabled>Select Table Number</option>
                        <option value="Table Number 1" >Table Number 1</option>
                        <option value="Table Number 2">Table Number 2</option>
                        <option value="Table Number 3">Table Number 3</option>
                    </select>
                    <br>
                    <input type="radio" name="gender" value="Male" style="scale: 1.5; margin-left: 5px;"><label style= "margin-left: 10px; color:#575757; font-size: 25px;"> Male</label>
                    <input type="radio" name="gender" value="Female" style="scale: 1.5; margin-left: 5px;"><label style= "margin-left: 10px; color:#575757; font-size: 25px;"> Female</label>
                    <input type="radio" name="gender" value="Other" style="scale: 1.5; margin-left: 5px;"><label style= "margin-left: 10px; color:#575757; font-size: 25px;"> Other</label>
                    <br>
                    <br>
                    <input type="text" placeholder="Enter the Number" name="number" required>
                    <br>
                    <input type="checkbox" name="food[]" value="Pizza"><span>Pizza</span>
                    <input type="checkbox" name="food[]" value="Burger"><span>Burger</span>
                    <input type="checkbox" name="food[]" value="Noodles"><span>Noodles</span>
                    <input type="checkbox" name="food[]" value="Momo"><span>Momo</span>
                    <input type="checkbox" name="food[]" value="French Fries"><span>French Fries</span>
                    <input type="checkbox" name="food[]" value="Ice Cream"><span>Ice Cream</span>
                    <br>
                    <br>
                    <textarea placeholder="Plese Write Your Requirements" name="description"></textarea>
                    <br>
                    <input type="Submit"   name="submit" style="background-color: orange; width: 570px; height: 50px; color: white; font-size: 30px; border: none; cursor: pointer;">
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
    $table_no = $_POST['table_no'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $food = $_POST['food'];
    $food_item1 = implode(",", $food);
    $description = $_POST['description'];

    $query = "insert into order_page(name, table_no, gender, contact, food_item, description) values('$name','$table_no','$gender','$number','$food_item1','$description')";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "<script>alert('Your Order Has Been Placed')</script>";

 } else{
        echo "<script>alert('Failed To Place Your Order')</script>";
    }
 }

 
?>