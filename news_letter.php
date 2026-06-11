<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .newsletter {
    border: 0px solid black;
    height: 400px;
    width: 100%;
    background: url(images/palakpaneer2.jpg) center;
    repeat: no-repeat;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

.newsletter .email-box {
    border: 2px solid yellow;
    height: 250px;
    width: 900px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.4);
    border-radius: 100px 0px 100px 0px;
}
.newsletter .email-box input[type="email"] {
    width: 600px;
    height: 50px;
    border-radius: 50px;
    padding: 10px;
    font-size: 25px;
    outline: none;
    border: 3px solid yellow;
}
.newsletter .email-box input[type="submit"] {
    width: 200px;
    height: 50px;
    border-radius: 50px;
    font-size: 25px;
    background-color: yellow;
    color: black;
    border: 0px solid green;
     
}
    </style>
</head>
<body>
    <center>
        <br>
        <br>
        <h1>Subscribe Our New's Channel</h1>
        <hr>
        <br>
        <br>
        <br>
        <div class="newsletter">
            <div class="email-box">
                <form action="news_letter_add.php" method="POST">
                    <input type="email" name="email" id = "email" placeholder="Enter Your Email" required>
                    <input type="submit" id = "submit" name="submit">
                </form>
            </div>
        </div>
    </center>
    
</body>
</html>




?>

<script>

    let email = document.querySelector("#email");
let submit = document.querySelector("#submit");
   

    function addsubmit(e){
        if(email.value.trim() === ""){
          e.preventDefault();
          alert("please fill the email before submitting")
        }
    }
    submit.addEventListener("click", addsubmit);




    
</script>