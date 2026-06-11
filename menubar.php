<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* Main menu */
#menu ul {
    list-style: none;
    display: flex;
    position: fixed;
    width: 100%;
    z-index: 1;
}

/* Main menu items */
#menu ul li {
    background-color: green;
    width: 16.66%;
    text-align: center;
    color: white;
    position: relative;
    height: 50px;
    line-height: 50px;
    font-size: 25px;
    cursor: pointer;
}

/* Hover effect */
#menu ul li:hover {
    background-color: orange;
}

/* Dropdown menu */
#menu ul li ul {
    position: absolute;
    top: 50px;
    left: 0;
    display: none;
}

/* Dropdown items */
#menu ul li ul li {
    width: 250px;
    background-color: green;
    border-top: 1px solid white;
}

/* Show dropdown on hover */
#menu ul li:hover ul {
    display: block;
}

/* Dropdown hover */
#menu ul li ul li:hover {
    background-color: orange;
}
</style>
<body>
    <div id="menu">
        <ul>
            <li><a href="index.php" style="text-decoration: none; color:white;">Home</a></li>
            <li><a href="about.php" style="text-decoration: none; color:white;">About</a></li>
            <li>Food
                <ul>
                    <li>fastfood</li>
                    <li>Cake</li>
                    <li>Piza</li>
                    <li>Samosa</li>

                </ul>
            </li>
            <li><a href="menu.php" style="text-decoration: none; color:white;">Menu</a></li>
            <li><a href="order.php" style="text-decoration: none; color:white;">Order</a></li>
            <li><a href="contact.php" style="text-decoration: none; color:white;">contact</a></li>
        </ul>
    
</body>
</html>