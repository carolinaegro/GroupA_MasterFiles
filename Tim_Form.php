<!DOCTYPE html>

<!-- Tim Haines, This is the submission page for the Team 1 website. -->
<html>
   <head>
      <meta charset = "utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Submit Information</title>
      <?php include ("header.php"); ?>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
      <script type = "text/javascript" src="scripts/Tim_Form.js"></script>
      <script type = "text/javascript" src="scripts/Tor_DropPin.js"></script>
       
      <link type="text/css" rel="stylesheet" href="css/tim_form.css">      

   </head>
   <body>

               <!-- List of countries stored as 'datalist' (so it can be referenced
               in two locations below. The list of values was a direct copy 
                and paste from the following site: 
                http://www.freeformatter.com/iso-country-list-html-select.html#alpha2 -->
              <datalist id="countries">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia, Plurinational State of</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten (Dutch part)</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
               </datalist>
        
 <section class="main-content">

        <h1>Submit Your Data Here</h1>
            <p><i>Please submit your data using the form below. If there is no appropriate
            entry for the information that you wish to record, please select 'other'.</i></p>
            <form name="Event_Report" method="post" action = "#" id="myForm" onsubmit="validateForm()"> 
            <!-- I don't think I need any of this (have simplified the form to make it more workable), but leaving it in j.i.c.                
            <input type = "hidden" name = "recipient"
            value = "timhaines@hotmail.com">
            <input type = "hidden" name = "subject" 
            value = "Data Form Submission"> -->

         <!-- <fieldset>
                <legend class="relegend">Please provide a description of where you are reporting this 
              incident from:</legend><br>
         <p><label> Country:
            <input class="input-block" name = "country" type="text" list="countries" />
         </label></p>    
         <p><label>Province or District: 
            <input class="input-block" name = "province" type = "text"  size = "25">
         </label></p>
         <p><label>Nearest Town: 
            <input class="input-block" name = "town" type = "text"  size = "25">
         </label></p>
         <p><label>Nearest Road: 
            <input class="input-block" name = "road" type = "text"  size = "25">
         </label></p>
         <p>Please provide any further information here which
             would assist us in locating you, if required.</p>
         <textarea name = "comments"
                   rows = "3" cols = "60">Enter text here.</textarea><br>
                   
           <label>Tick box if you less than 2km from the location of the incident
             <input name = "LocationNear" type = "checkbox"
                  value = "Yes"></label>
            <!-- The logic of this question is that if the answer is 'yes', then
            the location of the user's iphone can be used as the location of the
            incident on the map. Additionally, if 'Yes' we should direct them to
            the section of the site on safety advice.
            </fieldset>
            <br>
          <fieldset>
              <legend class="relegend">How do you know about this incident? </legend>

               <p>
            Select from the following drop-down menu:<br>
                <!-- Drop down selection
               <select name = "howiknow">
                  <option>I saw it happen</option>
                  <option>I saw it after it happened</option>
                  <option>I was told about it by someone who saw it</option>
                  <option>I heard people talking about it</option>
                  <option>I saw it in the media</option>
                  <option>I saw it on social media</option>
                  <option>Other</option>
            <!-- When we make this interactive, I would like the last three options
            to prompt the form-filler to state which site they found the info from
            or say what the source was if it was 'other'.
               </select>
          </fieldset>    
            <br> 
            
            <button class="button" type="submit" value="Submit">Submit</button>
            <button class="button" type="reset" value="Reset">Reset</button>  -->
            
            <br>
            
         
         
         <!--<button class="button" type="button" value="submit" onclick="validatenotnull();" >Submit contact details</button>
         <button class="button" type="reset" value="Submit">Reset</button> 
            </div>
          </fieldset>  
          <br> 
          <fieldset> -->
         
              <legend class="relegend">Event Details: </legend>
         <h3> When did the event occur? </h3>
         
          <p><label>Date: 
                  <input name = "eventdate" type = "date"></label></p>
          <p><label>Time: 
                  <input name = "eventtime" type = "time"></label></p>
             <!-- This throws a warning in the validator as 'date input type is
             not supported by all browsers. In 'real life' I would get around this
             by using a code library.-->
          <h3>Please provide a description of where this incident occurred:</h3><br>
        <!-- <label>Tick box if you less than 2km from the location of the incident
             <input name = "LocationNear" type = "radio"
                  value = "Yes"></label>
         <p> Ticking this box will set the location of the event to the current
         location of your smartphone. If you are able to provide a more accurate
         location by (insert method here) then please do so.</p> -->
         
         <p> <!--To submit the location of the incident by selecting
             a point on a map click <a href="http://laureatestudentserver.com/IN137/sutthipongl/maptest2/html5geolocationtest.html">here </a></p>
             As discussed with Tor, it would be better to have the map appear on
            this page - we plan to implement that next week - this is a a stop gap
            solution.-->
             
              <label>Location: 
            <input class="input-block" name = "eventposition" id="pinPos" type = "text"  size = "70">
         </label>
          <div id="map-canvas" style="height: 700px;"></div>
     
         <br>

          <p><label>Country: 
            <input class="input-block" name = "eventcountry" type="text" list="countries" />
          </label></p>
         <p><label>Province or District: 
            <input class="input-block" name = "eventprovince" type = "text"  size = "25">
         </label></p>
         <p><label>Nearest Town: 
            <input class="input-block" name = "eventtown" type = "text"  size = "25">
         </label></p>
         <p><label>Nearest Road: 
            <input class="input-block" name = "eventroad" type = "text"  size = "25">
         </label></p>
         <p>Please provide any further information here which
             would assist relief agencies in locating this incident.</p>
         <textarea name = "eventloccomments" placeholder ="enter text here"
                   rows = "3" cols = "60"></textarea>
         <br>
         <br>
         <h3> What Happened? </h3>
         <br>

         <p><label>Select the event type from the following drop-down menu:</label></p>
               <select  class ="input-block" name = "event_type">
                  <option>Avalanche</option>
                  <option>Conflict</option>
                  <option>Earthquake</option>
                  <option>Flooding</option>
                  <option>Landslide</option>
                  <option>Rioting / Civil Unrest</option>
                  <option>Tornado / Hurricane / Storm</option>
                  <option>Transport Accident</option>
                  <option>Tsunami</option>
                  <option>Volcanic Eruption</option>
                  <option>Wild Fire</option>
                  <option>Other</option>
                  
            <!-- Need to link this to the section below using JS, so that only
            the appropriate options show up. eg, 'plane crash' should not be able
            to be a sub-type of the event type 'Avalanche'.-->
               </select>
         <br>
         <br>

            <p>Select the event sub-type from the following drop-down menu:</p>
               <select class ="input-block" name = "event_sub_type">
                  <option>Bombing</option>
                  <option>Building Collapse</option>
                  <option>Drinking Water Shortage</option>
                  <option>Explosion</option>
                  <option>Fire</option>
                  <option>Flooding</option>
                  <option>Food Shortage</option>
                  <option>Military / Militia action</option>
                  <option>Rail Crash</option>
                  <option>Road / Rail blockage</option>
                  <option>Road Traffic Accident</option>
                  <option>Plane Crash</option>
                  <option>Shooting</option>
                  <option>Unexploded Bomb</option>
                  <option>Utilities Failure - Electricity</option>
                  <option>Utilities Failure - Gas</option>
                  <option>Utilities Failure - Water</option>
                  <option>Utilities Failure - Telecoms</option>
                  <option>Vessel sinking</option>
                  <option>Other</option>
                  
               </select>
            <br>

          <p><label>No of fatalities (dead): <br>
            <input class="input-block" name = "fatalities" type = "number" min="0">
            </label></p>
         
          <p><label>No of casualties (injured): 
            <input class="input-block" name = "casualties" type = "number" min="0">
            </label></p>
         
          <p><label>No of people missing: 
            <input class="input-block" name = "missing" type = "number" min="0">
            </label></p>
            
                  <p>Please provide as much detail as you can concerning the nature of the
             event.</p>
         <textarea name = "comments"
                   rows = "3" cols = "60" placeholder ="enter text here"></textarea><br>
         </fieldset>  
         <br>  
        <!-- The ability to upload photos here would be vv good, but is
        beyond my technical capabilities in the time available. Maybe later in the
        project?-->
        
         <fieldset>
              <p> If you are willing to be contacted by an aid agency to provide further
                  details, please click on the button below to submit details. </p>
             <button class="button" id="provide" type="button" onClick="appear()">Contact Details</button>
             <input type="hidden" id="detail" value="0">
            <div id="contactdetails" style ="display:none">
            <p><label>What is your name?: 
            <input name = "submittingname" type = "text"  size = "25" id="submittingname">
         </label></p>           
            What is the best way to contact you?
               <select name = "howtocontact">
                  <option>Email</option>
                  <option>Text</option>
                  <option>Phone</option>
                  <option>Skype</option>
                  <option>Other</option>
               </select>
         <br>
         <br>
        
         <p>Please provide your contact details here.</p>
         <textarea id = "condets" name = "condets" placeholder ="enter text here"
                   rows = "3" cols = "60"></textarea>
        </div>
           <input class="button" type ="submit" name="btnAddEvent" value="Submit"/>
           <!-- <button class="button" type="button" value="submit" onclick="validatenotnull();" >Submit</button> -->
            <button class="button" type="reset" value="Reset">Reset</button>  
      </form>

   </section>
   </body>
</html>


