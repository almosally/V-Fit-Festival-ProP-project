<!--<?php session_start();?>
<section style="text-align:center;color:black;">
    <div style="background:linear-gradient(rgba(244, 242, 237, 0.3),rgba(23, 242, 65, 0.57));padding-top:25px;padding-bottom:5px;">
        <a href="http://i363677.hera.fhict.nl" style="text-decoration:none">
            <img src="http://i363677.hera.fhict.nl/Logo.jpg" style="width:500px"/>
        </a>
        <h1 style="font-weight:bold;font-size:50px;">
                Welcome to V-Fit Festival!
        </h1>
    </div>
</section>

<section >
    <div style="text-align:center;color:black;">
        <h2>Thanks for your purchase!</h2>
        <h3>Use this barcode to collect your tickets at the event entrance.</h3>
        <h3>For more information check out 
            <a href="http://i363677.hera.fhict.nl" style="text-decoration:initial">the V-Fit festival website</a>
        </h3>
       <img src="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=welcome <?=$_SESSION['s_id']?>&choe=UTF-8'" />
    </div>
</section>
-->


<<?php session_start();?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section style="text-align:center;color:black;">

    <div style="background:linear-gradient(#fdcc52,#8700fd);padding-top:25px;padding-bottom:5px;">
        <a href="http://i363677.hera.fhict.nl" style="text-decoration:none">
      
        </a>
        <h1 style="font-weight:bold;font-size:50px;">
                security check
        </h1>
    </div>
</section>

<section >
    <div style="text-align:center;color:black;">
        <h2>your pin code!</h2>
        <div class="w3-container">
            <div class="w3-card-4" style="width:50%;">
                <header class="w3-container w3-blue">
               <h1>PIN</h1>
                </header>
              
                <div class="w3-container">
                    <p>
<?=$_SESSION['pin']?>
                    </p>
                </div>

                <footer class="w3-container w3-blue">
                    <h5>  </h5>
                </footer>
            </div>
        </div>
            <a href="http://i363677.hera.fhict.nl" style="text-decoration:initial"></a>
        </h3>
    </div>
</section>
