<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Archivo Black' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Adamina' rel='stylesheet'>
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <img class="bg" src="https://theacademicinsights.com/wp-content/uploads/2019/04/DKTE-Rajwada.jpg" alt="Collage Img">
    <div class="container">
        <h1>Welcome to DKTE Ichalkaranji USA Travel Form</h1>
        <h3>Enter Your details and submit to conform your participation to the trip</h3>

        <?php
        $insert = false;
        
        if($insert == true){
        echo "<p>Thanks for submitting the form, we will react you soon!</p>";}
        ?>

        <form action="index.php" method="post">
            <br>

            <input type="text" name="fname" id="fname" value="" placeholder="Enter your name here"><br><br>

            <input type="numbers" name="age" id="age" value="" placeholder="Enter your age here"><br><br>

            <input type="text" name="gender" id="gender" value="" placeholder="Enter Your gender here"><br><Br>

            <input type="email" name="email" id="email" value="" placeholder="Enter your email here"><br><br>

            <input type="phone" name="phone" id="phone" value="" placeholder="Enter your phone number here"><br><br>

            <textarea name="extrainfo" id="extrainfo" cols="30" rows="10" placeholder="Enter your other details here"></textarea><br><br>

            <button class="btn">Submit</button>
            <!--<button class="btn">Reset</button>-->

        </form>
    </div>

<script src="index.js"></script>
</body>
</html>