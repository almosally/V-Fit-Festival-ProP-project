<?php
include "../api.php";

$email = $_POST["inputemail"];

// Save every visitor in an array
$numOfTickets = $_POST["numOfTicketsInp"];
$numOfCampers = $_POST["numOfCampsitesInp"];
$visitors = array();

$CampSpotIndex = 0;
$indexCounter = 0;

for ($i=1; $i<=$numOfTickets; $i++)
{
    $visitorId  = "inputname$i";
    $cbCamper = "cbCamper$i";
    $name = $_POST[$visitorId];
    $camper = $_POST[$cbCamper];
    $campIndex = "NULL";
    if ($camper == "on")
    {
        $campIndex = $CampSpotIndex;
        $indexCounter++; 
        $numOfCampers++;
    }
    else
    {
        $camper = "off";
    }
    array_push($visitors, array($name, $camper, $campIndex));
    if ($indexCounter > 5)
    {
        $CampSpotIndex++;
        $indexCounter = 0;
    }
}

// Creat tickets in db
// Get ID of ticket_order record created if ID = 0 it means there were no available campsites
$id = createTicketOrder($visitors, $email, $numOfCampers);
if ($id != 0)
{
    // Create email
    $headers = "From: fusion-festival@fusion.com\nContent-type: text/html\n";
    $to = $email;
    $subject = "Fusion festival ticket";
    $msg = file_get_contents("../pages/confirmationEmail.php");
    $msg = str_replace('$id', $id, $msg);
    // Send confirmation mail to user
     
    mail($to, $subject, $msg, $headers);

    // Return to homepage
    header("Location: ../pages/orderSuccessPage.php");
}
else
{
    header("Location: ../pages/CampingFull.php");
}
?>
