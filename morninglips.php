<?php
        date_default_timezone_set("Europe/Amsterdam");
        $t = date("h:i");
        $s = date("d-m-y");
        $message;
        if ($t < "06:00") {
            $message = "Goedenacht";
            $imageURL = "backgrounds/night.png";
        } 
        elseif ($t < "12:00") {
            $message = "Goedemorgen";
            $imageURL = "backgrounds/morning.png";
        } 
        elseif ($t < "18:00") {
            $message = "Goedemiddag";
            $imageURL = "backgrounds/afternoon.png";
        } 
        else {
            $message = "Goedeavond";
            $imageURL = "backgrounds/evening.png";
        }
        $message .= "<br> <br>" . $t;
        $message .= "<br> <br> " . $s;
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tijd</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(<?php echo $imageURL; ?>); background-size: cover;">
    <?php echo "<p>" . $message . "</p>"; ?>
</body>
</html>