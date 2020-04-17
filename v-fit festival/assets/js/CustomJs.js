var FormState=1
function FormChange() {FormState++;
    if(FormState==2){document.getElementById("form").innerHTML= "<?php include('TicketForm.php') ?>"  ; }
    else if(FormState==3){document.getElementById("form").innerHTML= "all good" ; FormState++;}

}