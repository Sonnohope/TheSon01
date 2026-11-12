<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Experimenting with Arrays</title>
    <meta name="description" content="Lab 07 - Days of the week in English and French"/>
    <meta name="author" content="Son"/>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
<?php
    $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are:<br/>"
        . implode(", ", $days) . ".</p>";
 
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are:<br/>"
        . implode(", ", $days) . ".</p>";
?>
</body>
</html>
 