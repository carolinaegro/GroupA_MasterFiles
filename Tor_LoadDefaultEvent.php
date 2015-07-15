<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//error_reporting(E_ERROR | E_PARSE);
$username = "laureate_IN137";
//$username = 'laureate_xxxx';

$password = "wR7QL2TokqmK";
//$password = 'yyyyy';
//$dbname = 'mysql:host=laureatestudentserver.com;dbname=laureate_mobiles';
$dbname = 'mysql:host=laureatestudentserver.com;dbname=laureate_IN137';
$db;


try{

    $db = new PDO($dbname,$username,$password);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
        

   
$query = "SELECT GPS_Position,Event_Type,comments,eventdate FROM `Event_Details` ORDER BY EVENT_ID DESC LIMIT 10";

//Return PDOStatement 
$sqlstatement = $db->prepare($query);   
// Execute SQL
$sqlstatement->execute();

// Capture returned row(s)
$totalrow = $sqlstatement->rowCount();
$resultJSONArray = array();
//If some row(s) returned , print it as each row in table
if($totalrow > 0)
{


    while ($row = $sqlstatement ->fetchObject())
    {

       /*
        * Print each row from Query Result
        * The last coloumn is the Delete button that I utilize input type hidden to indentify RefNo.
        */

        $eachRowArray = array(
                'gps_position' => $row->GPS_Position,
                'event_type' => $row->Event_Type,
                //'event_subtype' => $row->Event_Sub_Type,
                'event_date' => $row->eventdate,
                //'event_time' => $row->event_time,
                //'no_fatal' => $row->No_Fatalities,
                //'no_casual' => $row->No_Casualties,
                'event_des' => $row->comments

            );
        array_push($resultJSONArray, $eachRowArray);

    }
    //Encode JSON
    $jsonoutput = json_encode($resultJSONArray);

    //Return output
    echo $jsonoutput;


}else
{
    //Week 07: If nothing returned , response with reason and this msg is shown on screen
     print "No record  matched";
    
}

//Close DB
$db=null;     
    

?>