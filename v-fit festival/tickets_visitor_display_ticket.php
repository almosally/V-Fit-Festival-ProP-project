<?php
session_start();
$username = $_SESSION['username'];
require("database.php");

// Get visitor information
$query = "SELECT * FROM participant WHERE email='$username'";
$result = mysqli_query($link, $query);
$visitor = mysqli_fetch_assoc($result);


// Get ticket information
$query = "SELECT * FROM visitor_ticket WHERE visitor_id IN (SELECT visitor_id FROM visitor WHERE email_address='$username')";
$result = mysqli_query($link, $query);
$ticket = mysqli_fetch_assoc($result);

?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/tickets_visitors.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link href="//fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Festival Ticket</title>
</head>

<body>

<div class="mail_wrapper">

    <a href="../duckit/">
        <div class="mail_header">
            <img src="img/logo/logo.png" alt="logo food truck festival" width="50%">
        </div>
    </a>

    <div class="mail_img">

    </div>
    <div class="mail">
        <div class="mail_txt">
            <span>Hello  <?php echo $visitor['first_name']." ".$visitor['last_name'];?>, </span><br><Br>
            This is your ticket to enter the festival.<br> Please print it and bring it with you, you'll be needing it to enter the festival.<Br>
            You can print your ticket by clicking the button below.<br>If you have any further questions, please contact us.</div>
        <div class="mail_ticket">
            <!--Ticket-->

            <div id="base" class="">

                <div id="u0" class="ax_default box_1">
                    <div id="u0_div" class="">

                    </div>
                </div>

                <div id="u1" class="ax_default image">
                    <img src='https://api.qrserver.com/v1/create-qr-code/?data=<?php echo $visitor['visitor_id']." ".$visitor['first_name']." ".$visitor['last_name'];?>' alt="">
                </div>

                <div id="u2" class="ax_default box_1">
                    <div id="u2_div" class="">
                        <br>
                        <span class="span1">FOOD TRUCK FESTIVAL <BR>EINDHOVEN<br></span>
                        <p>June 15 - 16 - 17, 2018<br><br></p>
                        <div class="v_info">
                            Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $visitor['first_name']." ".$visitor['last_name'];?><br>
                            Visitor ID:&nbsp;&nbsp;<?php echo $visitor['visitor_id'];?><br>
                            Camping:&nbsp;&nbsp;<?php if($ticket['camping_section_id'] == NULL) echo "no"; else echo $ticket['camping_section_id']; ?><br>
                            Days:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php
                                if($ticket['friday'] == 1) echo " FRI";
                                if($ticket['saturday'] == 1) echo " SAT";
                                if($ticket['sunday'] == 1) echo " SUN";
                                else echo $ticket['friday'];
                            ?>
                        </div>
                    </div>
                </div>

                <div id="u3" class="ax_default box_1">
                    <div id="u3_div" class=""></div>
                    <div id="u3_text" class="text ">
                        <p>GENNEPER PARKEN<br>TONGELREEPPAD 1<br>5644 RZ EINDHOVEN<br> THE NETHERLANDS</p>

                    </div>
                </div>
            </div>
            <!--end ticket-->
        </div>
        <!--to print-->
        <a class="print_button" title="print" onclick="window.print('tckt.php');" target="_blank" style="cursor: pointer">PRINT TICKET</a>

    </div>
    <div class="mail_footer">
        <a href="https://facebook.com"><i class="fa fa-facebook-official" style="font-size:30px;color:#3b5998;margin: 20px"></i></a>
        <a href="https://snapchat.com"><i class="fa fa-snapchat" style="font-size:30px;color:#ffec00;margin: 20px"></i></a>
        <a href="https://instagram.com"><i class="fa fa-instagram" style="font-size:30px;color:#cd486b;margin: 20px"></i></a>
        <a href="https://twitter.com"><i class="fa fa-twitter" style="font-size:30px;color:#55acee;margin: 20px"></i></a>
        <br>
        Copyright © 2017 Food Truck Festival Eindhoven 2018, All rights reserved. <br>
        You are receiving this email because you opted in via our website.<br>
        <a class="site" href="http://i379832.hera.fhict.nl/duckit/">http://i379832.hera.fhict.nl/duckit/</a><br><br>

        <span style="font-weight: lighter; letter-spacing: 0.2em">OUR MAILING ADDRESS IS:</span><br>
        Food Truck Festival Eindhoven 2018<br>
        Rachelsmolen 1, R1<br>
        Eindhoven, Noord-Brabant 5612 MA<br>
        Netherlands
    </div>
</div>

</body>
</html>
