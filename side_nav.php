
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show featured items</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="container1">
        <div class="leftdiv">
            
<div class="sidenav">
  <a href="dashboard.php">Dashboard</a>
  <a href="contact_display.php">Contact Form</a>
  <a href="#clients"></a>
  <button class="dropdown-btn">Featured 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="featured_show.php">Show </a>
    <a href="featured_images.php">Add</a>
  </div>
    <button class="dropdown-btn">News Letter 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="news_letter_show.php">Show </a>
    <a href="news_letter_add_admin.php">Add</a>
  </div>
    <button class="dropdown-btn">Team Member 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Update </a>
    <a href="#">Remove</a>
  </div>
    <button class="dropdown-btn">Menu Items 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Show </a>
    <a href="#">Add</a>
    <a href="#">Update</a>
    <a href="#">Remove</a>
  </div>
  <button class="dropdown-btn">Orders 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="order_show.php">Show </a>
    <a href="#">Pending</a>
    <a href="#">Completed</a>
    <a href="#">Cancelled</a>
  </div>
  <button class="dropdown-btn">Food Items 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Show </a>
    <a href="#">Add</a>
    <a href="#">Update</a>
    <a href="#">Remove</a>
  </div>
   <button class="dropdown-btn">Profile 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Change Password </a>
    <a href="#">Logout</a>
  </div>

</div>
 </div>


   <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script> 