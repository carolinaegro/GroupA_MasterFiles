<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="css/Tor_Map.css" type="text/css"/>

        <title>Reports on Map</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="scripts/Tor_MapReport.js"></script>
   
    </head>
    <body>
         <div id="map-canvas"></div>
         <div class="filter">
             <h3>Menu</h3>
      
             <form>               
                 
                 <section><!-- Search by event's description -->
                    <h4>Description Search</h4> 
                    <input type="text" id="searchText"/>
                 </section>
                  <!-- Search by Period -->
                 <section id="filterDate">
                    <h4>Period</h4>
                    <label id="startdatelabel">Start Date </label><input type="text" id="evtStartDate" placeholder="dd/mm/yyyy"><br/>
                    <label id="enddatelabel">End Date </label><input type="text" id="evtEndDate" placeholder="dd/mm/yyyy">
                 </section>
                 
                 <!-- Search by Event Type -->
                 <section id="filterEventType">
                    <h4>Event type</h4>
                    <table>
                        <tr>
                            <td><input type="checkbox" id="avala" value="Avalanche" checked>Avalanche</td>
                            <td><input type="checkbox" id="confl" value="Conflict" checked>Conflict</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="earthq" value="Earthquake" checked>Earthquake</td>
                            <td><input type="checkbox" id="flood" value="Flooding" checked>Flooding</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="lndslide" value="Landslide" checked>Landslide</td>
                            <td><input type="checkbox" id="civil" value="Rioting / Civil Unrest" checked>Rioting / Civil Unrest</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="tornado" value="Tornado / Hurricane / Storm" checked>Tornado / Hurricane</td>
                            <td><input type="checkbox" id="accident" value="Transport Accident" checked>Transport Accident</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="tsunami" value="Tsunami" checked>Tsunami</td>
                            <td><input type="checkbox" id="eruption" value="Volcanic Eruption" checked>Volcanic Eruption</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" id="fire" value="Wild Fire" checked>Wild Fire</td>
                            <td><input type="checkbox" id="other" value="Other" checked>Other</td>
                            
                        </tr>
                    </table>
                  
                 </section>
                 <p><button id="btnfilter" type="button">Filter</button><button type="reset">Reset</button></p>
             </form>
             
             <a href="http://laureatestudentserver.com/IN137/Website/FinalTest_GroupProject/FinalTest_GroupProject/public_html/Carolina_Home.html">Back to Home</a><br/>
             
             <ul id="errMsg">   
             </ul>
            
         </div>
    </body>
</html>
