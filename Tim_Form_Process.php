<?php
//This page takes data which is added via Tim_Form.php and adds it to the DB.
$dsn =
'mysql:host=laureatestudentserver.com;dbname=laureate_IN137';
$username = 'laureate_IN137';
$password = 'wR7QL2TokqmK';

try // Exeption handling - if this doesn't work then... see catch below. 
{
    $dbc = new PDO($dsn, $username, $password);
    $dbc->exec("SET CHARACTER SET utf8"); // Using Exec method of $DBC to set utf8. 

   $eventdate = $_POST['eventdate'];
   $eventtime = $_POST['eventtime'];
   $eventcountry = $_POST['eventcountry'];
   $eventprovince = $_POST['eventprovince'];
   $eventtown = $_POST['eventtown'];
   $eventroad = $_POST['eventroad'];
   $eventloccomments = $_POST['eventloccomments'];
   $event_type = $_POST['event_type'];
   $event_sub_type = $_POST['event_sub_type'];
   $fatalities = $_POST['fatalities'];
   $casualties = $_POST['casualties'];
   $missing = $_POST['missing'];
   $comments = $_POST['comments'];
   $submittingname = $_POST['submittingname'];
   $howtocontact = $_POST['howtocontact'];
   $condets = $_POST['condets'];
   //Tor
   $eventposition = $_POST['eventposition'];
   
 $sql = "INSERT INTO Event_Details (eventdate, eventtime, eventcountry, eventprovince, eventtown, eventroad, eventloccomments, event_type, event_sub_type, fatalities, casualties, missing, comments, submittingname, howtocontact, condets,GPS_Position)  VALUES ('$eventdate', '$eventtime', '$eventcountry', '$eventprovince', '$eventtown', '$eventroad', '$eventloccomments', '$event_type', '$event_sub_type', $fatalities, $casualties, $missing, '$comments', '$submittingname', '$howtocontact', '$condets','$eventposition')";
  //putting variaibles into fields in the SQL.
  
  $count  = $dbc -> exec($sql);// 1) Inserts data from above into SQL. Then finds how many rows are effected (default return) as a result, put result to variable count.

}
 catch (PDOException $e) // Catching the exception if the above doesn't work. SQL exception message and allocated to $e object.
 {

  echo $e->getMessage(); // Show the message referenced as $e.
 } 

 if($count != false) echo 'Number of rows added :'. $count; // Show the value $count (see above).

 $sql = "select eventdate, eventtime, eventcountry, eventprovince, eventtown, eventroad, event_type, event_sub_type, fatalities, casualties, eventloccomments, missing, comments, submittingname, howtocontact, condets from Event_Details"; // get all values from devices DB - add to $sql

 $results = $dbc -> query($sql); //method 'query' is executed, passing $sql parameter (see above - this is getting all the values from the DB).

$rows = $results -> rowCount(); //Setting the variable Rows.

if ($rows == 0) //If the DB is empty, then alert...
{

  echo "<p> The database is empty </p>";
}
else // otherwise push out content of database to table
{

  ?>

<?php include ("header.php"); ?>
<br>
<h2 align="center"> Events Reported So Far</h2>
<br>
      <table border=1 bgcolor="#eeeeee">
         <thead>
         <tr>
           <th>Event Date</th>
           <th>Event Time</th>
           <th>Country</th>
           <th>Province</th>
           <th>Nearest Town</th>
           <th>Nearest Road</th>
           <th>Loc. Desc.</th>
           <th>Event_Type</th>
           <th>Sub Type</th>
           <th>Fatalities</th>
           <th>Casualties</th>
           <th>Missing</th>
           <th>Event Desc</th>
         </tr>
         </thead>  

  <?php

      foreach ($results as $Event_Details) : //foreach takes each additional row from the db and allocates it to a new row in the table. 

?>
<tr>
<td>
<?php echo $Event_Details['eventdate']; ?> 
</td>
<td>
<?php echo $Event_Details['eventtime']; ?>
</td>
<td>
<?php echo $Event_Details['eventcountry']; ?>
</td>
<td>
<?php echo $Event_Details['eventprovince']; ?>
</td>
<td>
<?php echo $Event_Details['eventtown']; ?>
</td>
<td>
<?php echo $Event_Details['eventroad']; ?>
</td>
<td>
<?php echo $Event_Details['eventloccomments']; ?>
</td>
<td>
<?php echo $Event_Details['event_type']; ?>
</td>
<td>
<?php echo $Event_Details['event_sub_type']; ?>
</td>
<td>
<?php echo $Event_Details['fatalities']; ?>
</td>
<td>
<?php echo $Event_Details['casualties']; ?>
</td>
<td>
    
<?php echo $Event_Details['missing']; ?>
</td>
<td>
<?php echo $Event_Details['comments']; ?>
</td>
</tr>

<?php endforeach; // When there are no more rows in the DB, then stop.

}

$dbc = null; //release memory of the connection object.  

?>
</table>

<?php echo("<p><a href='Carolina_Home.html'>Home Page</a></p>");?> <!-- Link back to homepage. --> 
</body>
</html>