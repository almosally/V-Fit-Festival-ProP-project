<html><head></head><body>
    
   
<!-- scripts -->
    <!-- bootstrap core javascript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- plugin javascript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- custom scripts for this template -->
    <script src="js/new-age.min.js"></script>

    <script>
        $(document).ready(function()
        {
            $("#numcampspots").hide();
       

            $("#cbcampsite").click(function()
            {
                if($("#cbcampsite").prop("checked"))
                {
                    $("#numcampspots").show();
              
                }
                else
                {
                    $("#numcampspots").hide();
              
                }
            });
        });
    </script>
<!-- end scripts -->
    
    
<!-- order ticket -->
    <section id="order">
        <div>

              <form>

                 
                        <!-- input check campspot -->
                        <div class="row">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="checkbox-inline">
                                        campsite&nbsp;&nbsp;&nbsp;
                                        <input class="form-control" type="checkbox" id="cbcampsite"
                                            title="check if you would like to order campspots">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- end check campspot -->

                        <!-- input # campspots -->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="numcampspots">
                                    

                                    <?php   
                                    $name="studmysql01.fhict.local";
                                    $user = "dbi362335";
                                    $pass = "123123";
                                    $db = "dbi362335";      
                                    $conn = mysqli_connect($name, $user, $pass, $db);
                                    $query="select * from camping where NrPeople !='6' ";
                                    $result1 = mysqli_query($conn ,$query);
                                    ?>

                                    <select >

                                        <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                        <option  value="<?php echo $row1["Location"];?>">
                
                                            <?php echo $row1["Location"];?> (<?php echo $row1["NrPeople"];?>persons)                       
                                        </option>

                                        <?php endwhile;?>
                       
                                    
                                        <input type="number" class="form-control" value id="numcampspots" min="1" max="<?php echo $row1["NrPeople"];?>"
                                               placeholder="num of campspots" value="<?php echo $row1["Location"];?>;
                                           title="enter the number of campspots you would like.">    </select>
                                </div>
                            </div>
                                       
                           
                  </div>
                    <!-- end # campspots -->
                         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

                       https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=mamammama%2F&choe=UTF-8
                        </form></div></section></body></html>   <button type="submit" class="btn btn-default">order</button>