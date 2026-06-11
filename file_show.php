<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <!-- <img src="images1/frenchfries.jpg" alt=""> -->
   
    
</body>
</html>

 <?php
   include ("conection.php");
   $query = "select * from featured";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   if($total != 0){
    while($result = mysqli_fetch_assoc($data)){
        echo $result['id']."<br>";
        echo "<img src = ' ".$result['image_source']." ' width='10%' <br>";
    }
   
   }  else{
        echo "no record found";
    }
   ?>