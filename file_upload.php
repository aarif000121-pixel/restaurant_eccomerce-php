
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
<input type="file" name="file" ><br><br>
<input type="submit" value="Upload image" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $filename = $_FILES['file']['name'];
    $tempname = $_FILES['file']['tmp_name']; // Correct key
    $folder = "images1/" . $filename;

    if(empty($filename))
    {
        echo "Please select a file.";
    }
    else
    {
        if(move_uploaded_file($tempname, $folder))
        {
            echo "<br>File uploaded successfully.";
            // echo "<br><img src='$folder' width='200'>";
        }
        else
        {
            echo "<br>File upload failed.";
        }
    }
}
?>
