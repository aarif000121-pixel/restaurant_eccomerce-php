<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
    <link rel="stylesheet" href="css/contact_show.css">
</head>
<body>

<?php 
include 'conection.php';
include 'side_nav.php';

$query = "SELECT * FROM featured";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
?>

<h1 align="center">Featured Details</h1>
<h3 align="center">Display All Records</h3>

<table border="2" width="75%" cellspacing="0" style="margin: 80px auto 20px auto; border-collapse: collapse;">
    <tr>
        <th width="6%">ID</th>
        <th width="75%">Item Image</th>
        <th width="20%">Operation</th>
    </tr>

<?php
if($total != 0){

    while($result = mysqli_fetch_assoc($data)){

        echo "<tr>

        <td style='font-size:15px; padding:10px;'>".$result['id']."</td>

        <td style='font-size:15px; padding:10px;'>
            <img src='".$result['image_source']."' alt='Image' width='18%'>
        </td>

        <td style='font-size:15px; padding:10px;'>

            <a href='featured_delete.php?id=".$result['id']."'
               onclick='return checkDelete();'>

                <input type='button'
                       value='Delete'
                       class='delete_btn'
                       style='background-color:#f44336;
                              color:white;
                              border:none;
                              padding:5px 10px;
                              text-decoration:none;
                              display:inline-block;
                              font-size:16px;
                              margin:-2px 1px;
                              cursor:pointer;'>

            </a>

        </td>

        </tr>";
    }

}else{
    echo "<tr><td colspan='3' align='center'>Data not found</td></tr>";
}
?>

</table>

<script>
function checkDelete(){
    return confirm('Are you sure you want to delete this record?');
}
</script>

</body>
</html>