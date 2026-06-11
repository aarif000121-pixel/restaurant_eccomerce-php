<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Display</title>
    <link rel="stylesheet" href="css/contact_show.css">
    <link rel="stylesheet" href="css/featured_style.css">
</head>
<body>
    

<?php 
include 'conection.php';
include 'side_nav.php';

?>
<h1 align="center">Contact Featured Item</h1>
<h3 align="center">Display All Featured Items</h3>

<div class="container" style="border: 0px solid black;width: 60%; height:27%; margin-left: 40%; margin-top:5%;">
    <div class="form" style="border: 0px solid green; width:60%; margin: left 100px;">
       <form action="#" method="POST" enctype="multipart/form-data"
      style="display:flex; flex-direction:column; align-items:center; padding:25px; gap:15px;   ">

    <input type="file" name="uploadfile"
           style="width:90%; padding:12px; border:2px dashed #4CAF50; border-radius:8px; background:#f9f9f9; cursor:pointer;">

    <input type="submit" value="Upload Image" name="submit"
           style="width:90%; padding:12px; background:linear-gradient(45deg,#4CAF50,#2E8B57); color:white; border:none; border-radius:8px; font-size:16px; font-weight:bold; cursor:pointer; box-shadow:0 4px 8px rgba(0,0,0,0.2);">
           
</form>
    </div>
</div>

</body>
</html>




<?php

include "conection.php";
error_reporting(0);

if(isset($_POST['submit'])){

    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "images1/" . $filename;

    if(empty($filename)){
        echo "Please select an image.";
    }
    else{

        if(move_uploaded_file($tempname, $folder)){
            $Query = "insert into featured (image_source) values ('$folder')";
            $data = mysqli_query($conn, $Query);
            if($data){
                echo "<script>alert('success')</script>";
            } else{
                 echo "<script>alert('Failed')</script>";
            }

            echo "<script>alert('File uploaded successfully');</script>";
            }
        else{
            echo "File upload failed.";
        }

    }
}

?>

