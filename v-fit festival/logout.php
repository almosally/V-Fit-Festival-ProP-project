                        <?php
//start or resume seassion
session_start(); 

//free the sessions
session_unset();

//remove session
session_destroy();

//go back to the index after logged out
header('location:index.php');

  ?>