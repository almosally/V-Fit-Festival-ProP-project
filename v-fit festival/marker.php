<?php
// Require the QR Code library
require_once('phpqrcode/qrlib.php');
 
// Put the form data in $qrText
$qrText = $_REQUEST['someText'];
 
// Print a PNG image header
header('Content-Type: image/png');
 
// Print the binary image data for the QR Code
QRcode::png($qrText, '', 'H', 10, 1);
?>