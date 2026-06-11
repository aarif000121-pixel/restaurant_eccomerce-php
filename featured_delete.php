    <!-- <?php
    // include 'conection.php';
    // $id = $_GET['id'];
    // // echo $id;
    // $query = "delete from featured where id='$id' ";
    // $data = mysqli_query($conn, $query);
    // if($data){
        
    //     echo "<script>alert('Record Deleted')</script>";
    //     ?>
    // //     <meta http-equiv = "refresh" content = "0; url=http://localhost/restaurant%20backend/Restaurant/featured_show.php" />
    // //     <?php
    // } else {
    //     echo "Record Not Deleted";
    // }
    ?> -->



<?php
include 'conection.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $query = "DELETE FROM featured WHERE id='$id'";
    $data = mysqli_query($conn, $query);

    if($data)
    {
        header("Location: featured_show.php");
        exit();
    }
    else
    {
        echo "Record Not Deleted";
    }
}
else
{
    echo "ID Not Found";
}
?>