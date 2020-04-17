<?php
    include "../components/header.php";
    include "../components/scripts.php";
?>

<section class="features bg-primary text-center" id="orderTicketsPage" style="height:100%;overflow-y:auto !important;">
    <div class="container contentsection">
       <h1 style="color:white;">Order ticket!</h1> 
        <form action="../forms/registerForm.php" method="post">
            <!-- input email -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input type="email" class="form-control" id="inputemail" 
                        name="inputemail" placeholder="email" 
                        title="email address to receive order confirmation." required/>
                </div>
            </div>
            <!-- end input email -->

            <!-- input check campspot -->
            <div class="row" id="visitorAdd1">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="inputname1" 
                        placeholder="Name" title="inputname1" name="inputname1" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="checkbox-inline">
                            Camper&nbsp;&nbsp;&nbsp;
                            <input class="form-control" type="checkbox" 
                            id="cbCamper1" onclick="calculateNumberOfCampspots();updateCounters()" title="Camper" name="cbCamper1"/>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-bottom: 25px;">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button class="btn btn-default" type="button" 
                        onclick="addVisitorLine()">Add visitor</button> 
                    <button class="btn btn-default" type="button" 
                        onclick="rmVisitorLine()">Remove visitor</button> 
                    <!--
                    <button class="btn btn-default" type="button"
                        onclick="addAdditionalCampspots();">Add campspot</button>
                    -->
                </div>
            </div>
            <!-- end check campspot -->

            <!-- input # campspots -->
            <div class="row" style="text-align: left !important">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <h1 id="numOfTickets"></h1>
                    <input id="numOfTicketsInp" name="numOfTicketsInp" readonly style="display:none;"></input>
                </div>
                <div class="col-md-5">
                    <h1 id="ticketPrice"></h1>
                </div>
            </div>
            <div class="row" style="text-align: left !important">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <h1 id="numOfCampsites"></h1>
                    <input id="numOfCampsitesInp" name="numOfCampsitesInp" readonly style="display:none"></input>
                </div>
                <div class="col-md-5">
                    <h1 id="campPrice"></h1>
                </div>
            </div>
            <h1 id="totalPrice" style="font-weight:bold !important"></h1>
            <button type="submit" class="btn btn-default">order</button>
            <a href="../index.php">
                <button type="button" class="btn btn-default">cancel</button>
            </a>
        </form>
            <script>
            var numberOfVisitors = 1;
            var numberOfCampspots = 0;
            var additionalCampspots = 0;

            // set change function for intial input fields
            $("input").change(function()
            {
                updateTotalPrice();
            });
            /*
             * Add input fields for another ticket
             */
            function addVisitorLine()
            {
                $("#visitorAdd" + numberOfVisitors++).after('<div class="row" id="visitorAdd' + numberOfVisitors + '"><div class="col-md-3"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control" id="inputname' + numberOfVisitors + '" name="inputname' + numberOfVisitors + '" placeholder="Name" title="Name" required></div></div><div class="col-md-3"><div class="form-group"><label class="checkbox-inline">Camper&nbsp;&nbsp;&nbsp;<input class="form-control" type="checkbox" onclick="calculateNumberOfCampspots();updateCounters()" id="cbCamper' + numberOfVisitors + '"title="Camper" name="cbCamper' + numberOfVisitors + '"></label></div></div></div>');

                calculateNumberOfCampspots();
                updateCounters();
                updateTotalPrice();

                // Set after adding input fields so they get the same change function
                $("input").change(function()
                {
                    updateTotalPrice();
                });
            }

            function rmVisitorLine()
            {
                $("#visitorAdd" + numberOfVisitors).remove();
                $("#inputname" + numberOfVisitors).remove();
                numberOfVisitors -= 1;
                calculateNumberOfCampspots();
                updateCounters();
                updateTotalPrice();
            }

            /*
             * Calculate the number of camping spots, manually added spots + a max of 6 people per spot
             */
            function calculateNumberOfCampspots()
            {

                var numberOfCampers = getNumberOfCampers();
                switch (numberOfCampers)
                {
                    case 0:
                        numberOfCampspots = additionalCampspots; 
                        break;
                    default:
                        numberOfCampspots = Math.ceil(numberOfCampers / 6) + additionalCampspots;
                        break;
                }
            }

            function getNumberOfCampers()
            {
                var numberOfCampers = 0; 
                for (var i=1; i<=numberOfVisitors; i++)
                {
                   if ($("#cbCamper" + i).is(":checked"))
                   {
                       numberOfCampers++;
                   }
                }
               return numberOfCampers; 
            }

            /*
             * Update the number of visitors and number of campspots fields
             */
            function updateCounters()
            {
                $("#numOfTickets").val(numberOfVisitors);
                $("#numOfTicketsInp").val(numberOfVisitors);
                $("#numOfCampsites").val(numberOfCampspots);
                $("#numOfCampsitesInp").val(numberOfCampspots);
            }
                
            /*
             * Add one manually added campspot
             */
            function addAdditionalCampspots()
            {
                additionalCampspots++;
                calculateNumberOfCampspots();
                updateCounters();
                updateTotalPrice();
            }

            function updateTotalPrice()
            {
                var ticketTotal = 0;
                var campingTotal = 0;
                if (numberOfVisitors > 3)
                {
                    ticketTotal = numberOfVisitors * 45;
                }
                else
                {
                    ticketTotal = numberOfVisitors * 55;
                }
                
                campingTotal = numberOfCampspots * 10;
                campingTotal += getNumberOfCampers() * 20;

                console.log("Total price: " + (ticketTotal + campingTotal));
                $("#numOfTickets").html(numberOfVisitors + " tickets");
                $("#ticketPrice").html("€ " + ticketTotal);
                $("#numOfCampsites").html(numberOfCampspots + " campspots");
                $("#campPrice").html("€ " + campingTotal);
                $("#totalPrice").html("Total: €" + (ticketTotal + campingTotal));
            }
            /*
             * Set counters to initial value
             */
            updateCounters();
            updateTotalPrice();
        </script>
   </div>
</section>
