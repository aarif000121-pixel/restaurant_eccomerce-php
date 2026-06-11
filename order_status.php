<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders status</title>
    <link rel="stylesheet" href="css/contact_show.css">
</head>
<body>
    

<?php 
// $id = $_GET['id'];
include 'conection.php';
include 'side_nav.php';

$query = "select * from order_page";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
?>
<h1 align="center">Customer Order Details</h1>
<h3 align="center">Display Order Status</h3>
<table border="2" width="75%" cellspacing="0" style="margin: 80px auto 20px auto; border-collapse: collapse;">
     <tr>
        <th width="6%">ID</th>
        <th width="12%">Name</th>
        <th width="15%">Table No.</th>
        <th width="12%">Gender</th>
        <th width="6%">Food Item</th>
        <th width="25%">Description</th>
    
        <th width="38%">Operation</th>

    </tr>

<?php
if($total != 0){
    
    while($result = mysqli_fetch_assoc($data)){
        echo "<tr>
        <td style='font-size:15px; padding:10px;'>".$result['id']."</td>
        <td style='font-size:15px; padding:10px;'>".$result['name']."</td>
        <td style='font-size:15px; padding:10px;'>".$result['table_no']."</td>
        <td style='font-size:15px; padding:10px;'>".$result['gender']."</td>
        <td style='font-size:15px; padding:10px;'>".$result['food_item']."</td>
        <td style='font-size:15px; padding:10px;'>".$result['description']."</td>
        <td style='font-size:15px; padding:10px;'>".$result['order_status']."</td>
        <form action='order_status.php' method='post'>
       
       

         <td style='font-size:15px; padding:10px;'><a href='order_delete.php?id=".$result['id']."'><input type='submit' value='Delete' class='delete_btn' onclick='return checkDelete();' name='delete_btn'
         style='background-color: #f44336; color: white; border: none; padding: 5px 10px; ; text-decoration: none; display: inline-block; font-size: 16px; margin: -2px 1px; cursor: pointer;'></td>

        </a>
 </form>
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

<script>
    function checkDelete(){
        return confirm('Are you sure you want to delete this record?');
    }

    </script>