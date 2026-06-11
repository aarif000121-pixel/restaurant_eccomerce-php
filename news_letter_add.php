<?php
include ('conection.php');

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $query = "insert into news_letter(email) values ('$email')";
    $data = mysqli_query($conn, $query);
    if($data) {
        echo "<script>alert('data is inserted into the data base')</script>";
        ?>
<meta http-equiv="refresh" content="0; url=contact.php">
        <?php
    
    } else {
        echo "<script>alert('data not transferred')</script>";
    }

}