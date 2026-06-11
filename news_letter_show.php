<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News letter Recordes</title>
    <link rel="stylesheet" href="css/contact_show.css">
</head>
<body>
    

<?php 
include 'conection.php';
include 'side_nav.php';

$query = "select * from news_letter";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
?>
<h1 align="center">News Letter Records</h1>
<h3 align="center">Display All Inquiries</h3>
<table border="2" align="center" width="70%" cellspacing="0">
    <tr>
        <th width="6%">ID</th>
        <th width="15%">Email</th>
    </tr>

<?php
if($total != 0){
    
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
        <td>".$result['id']."</td>
        <td>".$result['email']."</td>
        </tr>"; 
        

    }
}else{
    echo "data not found";
}

?>


</table>
        <!-- echo $result['id']."  "; echo $result['name']."  "; echo $result['email']."  "; echo $result['message']."  "; echo $result['gender']."<br>"; -->
</body>
</html>