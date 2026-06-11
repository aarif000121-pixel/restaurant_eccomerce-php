<!-- <?php
// include 'conection.php';
// $id = $_GET['id'];
// $query = "delete from order_page where id='$id'";
// $data = mysqli_query($conn, $query);
// if($data){
//     echo "<script>alert('do you really want to delete this record?')</script>";
//     echo "<script>alert('Record Deleted')</script>";
//     ?>
//     <meta http-equiv = "refresh" content = "0; url=http://localhost/Restaurant/order_show.php" />
//     <?php
// } else {
//     echo "Record Not Deleted";
// }
?> -->





<?php
include 'conection.php';

$id = $_GET['id'];

$query = "DELETE FROM order_page WHERE id='$id'";
$data = mysqli_query($conn, $query);

if($data){
    header("Location: order_show.php");
    exit();
} else {
    echo "Record Not Deleted";
}
?>