<?php

function connectToDb()
{
    $dbUri = "mysql:host=studmysql01.fhict.local;dbname=dbi380151";
    $dbUsername = "dbi380151";
    $dbPassword = "prop";
    try
    {
        return $db = new PDO($dbUri , $dbUsername, $dbPassword);
    }
    catch (PDOException $e)
    {
        echo "Error: ".$e->getMessage();
    }
}

/*
 * Get all avilable campsite records
 *    (where is_reserved = 0)
 */
function getAvailableCampsites()
{
    $db = connectToDb();
    $qry = $db->Prepare("SELECT * FROM campsite WHERE is_reserved=0");
    $qry->execute();
    $res = $qry->fetchAll();
    return $res;
}

/*
 * Set campsite record to reserved and num of campers 
 * Return Array of edited campsite record IDs
 */
function reserveCampspots($visitors)
{
    $res = getAvailableCampsites();
    //if (sizeof($res) == 0) { return Array(); }
    $db = connectToDb();

    /*
     * Get Unique IDs from visitors
     * Get Number of visitors per campspot
     */
    $IDs = array();
    $NumOfCampers = array();
    foreach ($visitors as $v)
    {
        $i = $res[$v[2]]["campsite_id"];
        if (!in_array($i, $IDs) && $i != null)
        {
            array_push($IDs, $i);
            $NumOfCampers[$i] = 0;
        }
        $NumOfCampers[$i]++;
    }

    /* 
     * Update campsite, set is_reserved and num_of_campers
     * for each unique camp ID found previously
     */
    foreach ($IDs as $id)
    {
        $qry = $db->Prepare(
            "UPDATE campsite
            SET is_reserved=1, num_of_campers=:NoOfCa
            WHERE campsite_id=:id
            ");
        $qry->bindParam(":id", $id);
        $qry->bindParam(":NoOfCa", $NumOfCampers[$id]);
        $qry->execute();
    }

    return $IDs;
}

/*
 * Create/update all records in the database for the purchase of a ticket
 * ticker_order: one record for this entire order
 * campsite: one record per campspot
 * visitor: one record per visitor
 */
function createTicketOrder($visitors, $email, $numOfCampers)
{
    try
    {
        // Reserve all campspots with the number of visitors staying there
        $CampIds = reserveCampspots($visitors);
        if (sizeof($CampIds) == 0 ) { return 0; }
        // Create the ticker_order record for this order
        $db = connectToDb();
        $qry = $db->Prepare(
            "INSERT INTO 
            ticket_order (no_of_visitor, email) 
            VALUES (:no_of_visitors, :email)"
        );
        $qry->bindParam(":no_of_visitors", sizeof($visitors));
        $qry->bindParam(":email", $email);
        $qry->execute();
        $orderId = $db->lastInsertId();

        // Create visitor records for each visitor
        foreach($visitors as $v)
        {
            /*
             * If visitor is not a camper, campsite_id is NULL
             * if visitor is a camper campsite_id is their campspot
             */
            $qry;
            if ($v[1] == "on")
            {
                $campSpot = $CampIds[$v[2]];
                $camper = 1;
                $qry = $db->Prepare(
                    "INSERT INTO visitor
                    (name, is_checkedin, balance, is_camper, ticket_order_id, campsite_id)
                    VALUES (:name, 0, 0, :camper, :orderId, :campId)"
                );
                $qry->bindParam(":name", $v[0]);
                $qry->bindParam(":camper", $camper);
                $qry->bindParam(":orderId", $orderId);
                $qry->bindParam(":campId", $campSpot);
            }
            else
            {
                $camper = 0;
                $qry = $db->Prepare(
                    "INSERT INTO visitor
                    (name, is_checkedin, balance, is_camper, ticket_order_id)
                    VALUES (:name, 0, 0, :camper, :orderId)"
                );
                $qry->bindParam(":name", $v[0]);
                $qry->bindParam(":camper", $camper);
                $qry->bindParam(":orderId", $orderId);
            }
            $qry->execute();
        }
        return $orderId;
    }
    catch (PDOException $e)
    {
        echo "Error: ".$e->getMessage();
    }
}

function pprint($title, $msg)
{
    print_r($title); 
    print_r("<br>");
    print_r($msg);
    print_r("<br>");
    print_r("<br>");
}

?>
