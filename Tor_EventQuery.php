
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
        
// Get Form data
//    $parameter = "isAval="+isAval+"&isConflict="+isConflict+"&isEarthQ="+isEarthQ+"&isFlood="+isFlood+
//                "&isLandsld="+isLandsld+"&isCivil="+isCivil+"&isTornado="+isTornado+"&isAccident="+isAccident+
//                "&isTsunami="+isTsunami+"&isEruption="+isEruption+"&isFire="+isFire+"isOth="+isOth;
//    
//    $parameter += "&startDate="+startDate+"&endDate="+endDate;
//    $parameter += "&searchTxt="+searchTxt;

 // Clone $_POST to new array object
$info =  new ArrayObject($_GET);

// Get event type

$eventTypeList = $info["et"];

$eventTypearr = split(",",$eventTypeList);

$startdate = $info["sd"];
$endDate = $info["ed"];

$searchTxt = $info["st"];

$condition = array();
$condition_value = array();

// Create SQL   
$sql_filter = "SELECT GPS_Position,Event_Type,comments,eventdate FROM Event_Details WHERE 1";

if(strlen($startdate) > 0)
{
    array_push($condition,"eventdate >= ?");
    array_push($condition_value,reformatDate($startdate));
}
   
if(strlen($endDate) > 0)
{
     array_push($condition,"eventdate <= ?");
     array_push($condition_value,reformatDate($endDate));
}
    
if(strlen($searchTxt)>0)
{
    //Wrong
    //array_push($condition,"comments LIKE '%?%'");
    
    //Correct
    array_push($condition,"comments LIKE ?");
    //array_push($condition,"INSTR(comments,?) >= 0");
    
    //Wrong
    //array_push($condition_value,$searchTxt);
    //Correct
    array_push($condition_value,"%".$searchTxt."%");
}

if(strlen($eventTypeList)>0)
{
    // Each event type need its own ? , so, a no of "?" is equal to a no of event
    // http://stackoverflow.com/questions/2373562/pdo-with-where-in-queries
    $qmofevent = str_repeat("?,", count($eventTypearr)-1) . "?";
 
    array_push($condition,"Event_Type in ($qmofevent)");
     
    foreach($eventTypearr as $et)
    {
      
        array_push($condition_value,$et);
    }
    
}

// If we have addition condition, append AND after "WHERE 1"
if(count($condition)>0)
    $sql_filter .= " AND ";

// connect each where condition with AND
$conditions .= implode(" AND ",$condition);

//print "addition condition is ".$conditions."<br>";

// connect main SQL to conditions
$sql_filter .= $conditions;
//print "sql filter is ".$sql_filter."<br>";


//print_r($condition_value);



//Return PDOStatement 
$sqlstatement = $db->prepare($sql_filter);   
// Execute SQL
$sqlstatement->execute($condition_value);

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
    
function reformatDate($d)
{
    $arr = split("/",$d);
    return $arr[2]."-".$arr[1]."-".$arr[0];
}
?>