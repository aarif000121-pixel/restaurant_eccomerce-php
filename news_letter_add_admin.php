<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News Letter</title>
    <link rel="stylesheet" href="css/contact_show.css">
    <style>
      

body{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(
        -45deg,
        #ee7752,
        #e73c7e,
        #23a6d5,
        #23d5ab
    );
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;
}

@keyframes gradientBG{
    0%{
        background-position: 0% 50%;
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 0% 50%;
    }
}

.container{
    width: 100%;
    max-width: 750px;
    padding: 20px;
    margin-left: 250px;
    margin-top: 50px;
}

.form{
    padding: 40px;
    border-radius: 25px;
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
    animation: floating 3s ease-in-out infinite;
}

@keyframes floating{
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(-15px);
    }
    100%{
        transform: translateY(0);
    }
}

.form h2{
    color: #fff;
    text-align: center;
    margin-bottom: 10px;
    font-size: 32px;
}

.form p{
    color: rgba(255,255,255,0.8);
    text-align: center;
    margin-bottom: 25px;
}

.form form{
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form input[type="email"]{
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 12px;
    outline: none;
    font-size: 16px;
    transition: all 0.4s ease;
}

.form input[type="email"]:focus{
    transform: scale(1.03);
    box-shadow:
        0 0 10px #fff,
        0 0 20px #00f7ff,
        0 0 40px #00f7ff;
}

.form input[type="submit"]{
    position: relative;
    padding: 15px;
    border: none;
    border-radius: 12px;
    font-size: 17px;
    font-weight: 600;
    color: white;
    cursor: pointer;
    overflow: hidden;
    background: linear-gradient(
        90deg,
        #ff512f,
        #dd2476
    );
    transition: 0.4s;
}

.form input[type="submit"]:hover{
    transform: translateY(-5px);
    box-shadow:
        0 0 15px #ff512f,
        0 0 30px #dd2476;
}

.form input[type="submit"]::before{
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.3);
    transform: skewX(-30deg);
    transition: 0.6s;
}

.form input[type="submit"]:hover::before{
    left: 100%;
}

/* Animated circles */

body::before,
body::after{
    content: "";
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    z-index: -1;
}

body::before{
    width: 250px;
    height: 250px;
    background: #ff00ea;
    top: 10%;
    left: 10%;
    animation: move1 8s infinite alternate;
}

body::after{
    width: 300px;
    height: 300px;
    background: #00fff2;
    bottom: 10%;
    right: 10%;
    animation: move2 10s infinite alternate;
}

@keyframes move1{
    from{
        transform: translate(0,0);
    }
    to{
        transform: translate(100px,80px);
    }
}

@keyframes move2{
    from{
        transform: translate(0,0);
    }
    to{
        transform: translate(-120px,-80px);
    }
}

/*h tags begins css*/

.main-heading{
    text-align: center;
    font-size: 3rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 10px;
    color: #fff;
    animation: glowText 2s ease-in-out infinite alternate,
               slideDown 1s ease;
}

.sub-heading{
    text-align: center;
    font-size: 1.2rem;
    font-weight: 400;
    color: rgba(255,255,255,0.85);
    margin-bottom: 40px;
    animation: fadeIn 2s ease;
}

/* Glow Animation */
@keyframes glowText{
    from{
        text-shadow:
            0 0 10px #fff,
            0 0 20px #00e5ff,
            0 0 30px #00e5ff;
    }
    to{
        text-shadow:
            0 0 20px #fff,
            0 0 40px #ff00ff,
            0 0 60px #ff00ff;
    }
}

/* Slide Down Effect */
@keyframes slideDown{
    from{
        opacity: 0;
        transform: translateY(-50px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}

/* Fade In Effect */
@keyframes fadeIn{
    from{
        opacity: 0;
        transform: translateY(20px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}
    </style>
</head>
<body>
    

<?php 
include 'conection.php';
include 'side_nav.php';






?>
<h1 align="center"> Add News Letter </h1>
<h3 align="center">please Prove An Email Address Here</h3>
<center>
    <div class="container">
        <div class="form">
            <form action="news_letter_add_admin.php" method="POST">
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>

    </div>

</center>

</body>
</html>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
$query = "insert into news_letter(email) values ('$email')";
$data = mysqli_query($conn, $query);
if($data){
    echo "<script>alert('data inserted succesfully')</script>";
}else{
    echo "<script>alert('data not inserted')</script>";

    }
}
    ?>