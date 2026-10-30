<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        $firstname = "";
    }
    if (isset($_POST["lastname"])) {
        $lastname = $_POST["lastname"];
    } else {
        $lastname = "";
    }
    if (isset($_POST["age"])) {
        $age = $_POST["age"];
    } else {
        $age = "";
    }
    if (isset($_POST["species"])) {
        $species = $_POST["species"];
    } else {
        $species = "";
    }
    if (isset($_POST["food"])) {
        $food = $_POST["food"];
    } else {
        $food = "";
    }
    if (isset($_POST["partysize"])) {
        $partysize = $_POST["partysize"];
    } else {
        $partysize = "";
    }

    if ($species == "M") {
        $species = "Human";
    } elseif ($species == "D") {
        $species = "Dwarf";
    } elseif ($species == "E") {
        $species = "Elf";
    } elseif ($species == "H") {
        $species = "Hobbit";
    }

    $tours = "";
    if (isset($_POST["accom"])) {
        $tours = $tours . "Accommodation";
    }
    if (isset($_POST["4day"])) {
        if ($tours != "") { $tours = $tours . " and "; }
        $tours = $tours . "Four-day tour";
    }
    if (isset($_POST["10day"])) {
        if ($tours != "") { $tours = $tours . " and "; }
        $tours = $tours . "Ten-day tour";
    }
    if ($tours == "") {
        $tours = "no bookings selected";
    }

    echo "<p>Welcome $firstname $lastname !<br />";
    echo "You are now booked on: $tours<br />";
    echo "Species: $species<br />";
    echo "Age: $age<br />";
    echo "Meal Preference: $food<br />";
    echo "Number of travellers: $partysize</p>";
?>
</body>
</html>