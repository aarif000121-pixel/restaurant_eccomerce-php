<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Display</title>
    <link rel="stylesheet" href="css/contact_show.css">
</head>
<body>
    

<?php 
include 'conection.php';
include 'side_nav.php';

$query = "select * from contact";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
?>
<h1 align="center">Contact form</h1>
<h3 align="center">Display All Inquiries</h3>
<table border="2" align="center" width="70%" cellspacing="0">
    <tr>
        <th width="6%">ID</th>
        <th width="12%">Name</th>
        <th width="15%">Email</th>
        <th width="7">Contact</th>
        <th width="6%">Message</th>
        <th width="33%">Gender</th>
    </tr>

<?php
if($total != 0){
    
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
        <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['email']."</td>
        <td>".$result['contact']."</td>
        <td>".$result['message']."</td>
        <td>".$result['gender']."</td>
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