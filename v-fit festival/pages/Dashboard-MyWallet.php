<section class="spotlight">
    <div class="image"><img src="images/Payment.jpg" alt=""/></div>
    <div class="content">
        <h2>Your Wallet</h2>
        <form method="post" action="#">
            <div class="row uniform">
                <div class="12u$">

                <?php
                include("database.php");




                echo   "<h3> Account Holder :  " . $_SESSION['username'] . ", " . $_SESSION['lname'].
                        "<h3>Balance: " . $_SESSION['balance'].",<br> Your Location " .$_SESSION['Camping']. "<br> workshop  ".$_SESSION['workshop'].""
                    
                    
                    ?>;
                             
                </div>


            </div>
        </form>
    </div>
</section>