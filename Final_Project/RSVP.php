<?php

if(session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

    <!DOCTYPE html>
    <html>

    <head>
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            @font-face {
                font-family: "Scriptin";
                src: url("/assets/fonts/SCRIPTIN.ttf") format("truetype");
            }

        </style>
        <link rel="stylesheet" href="styles/css/styles.css">
    </head>

    <body>
        
        <div class="row">
            <p style="text-align:left;padding: 5px 25px;"><a href="index.php">< Home</a></p>
            <div class="col-md-3 spacer"></div>
            <div class="col-xs-12 col-md-6 rsvp" >
                <h1>RSVP</h1>
                <form action="doRSVP.php" method="post">
                    <label for="first"><span class="asterik">*</span>First Name:</label>
                    <input type="text" name="first"><br>
                    <label for="last"><span class="asterik">*</span>Last Name:</label>
                    <input type="text" name="last"><br>
                    <label for="email"><span class="asterik">*</span>Email:</label>
                    <input type="email" name="email"><br>
                    <label for="attending"><span class="asterik">*</span>Attending:</label>
                    <input type="radio" name="attending" value="1" id="yes"> Yes
                    <input type="radio" name="attending" value="0" id="no"> No<br>
                    <input type="submit" value="RSVP" action="doRSVP.php" />
                </form>
            </div>
            <div class="col-md-3 spacer"></div>
        </div>
        
        <?= $_SESSION['registerMessage'] ?>
            <?php unset($_SESSION['registerMessage']) ?>
    </body>

    </html>
