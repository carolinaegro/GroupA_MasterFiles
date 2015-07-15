<!DOCTYPE html>
<!-- Week 07 Group Assignment: Advice Page - Jeanie Hedley -->

<!-- Defines the document type and language for screen readers and search engines. -->
<html lang="en">
    <head>
        <!-- Title to be displayed on tab. -->
        <title>Natural Disasters Advice Page</title>
        
        <?php include ("header.php"); ?>
                
        <!-- Link HTML file to JavaScript file. -->
	<script type="text/javascript" src="scripts/Jeanie_AdviceJS.js"></script>
        
    </head>
    
    <body>
        
        <!-- Introductory paragraph. -->
        <section class="main-content">
            <h1>Natural Disasters</h1>
            <p>
                There are many natural disasters that occur in the world, from earthquakes and tornados, to tsunamis, 
                volcanic eruptions, fires, floods and avalanches.  There are lots of useful sites and information available 
                on the Internet and this page aims to identify the authoritative and useful ones that will help people to 
                prepare, endure and recover from an incident.
            </p>
        
            <!-- Quick Tips Table -->
            <h2>Quick Tips</h2> <hr>
            <table>
                <thead>
                    <tr>
                        <th>Before an Incident</th>
                        <th>During an Incident</th>
                        <th>After an Incident</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <!-- BEFORE an incident. -->
                        <td>
                            <ul>
                                <li>Know the escape routes out of your home.</li>
                                <li>Know the escape routes out of the area you live in.  Major roads may be blocked by traffic, so it could be useful to know back roads.</li>
                                <li>Know which parts of your house are structurally sound (eg internal rooms or rooms with few windows).</li>
                                <li>Fit smoke and carbon monoxide detectors in key areas.</li>
                                <li>Keep a stock of long-lasting food (eg tinned goods, long-life milk/juice, bottled water, etc).</li>
                            </ul>
                        </td>
                        
                        <!-- DURING an incident. -->
                        <td>
                            <ul>
                                <li>Keep away from windows.</li>
                                <li>Try to stay calm and reassure nervous children, adults and pets.</li>
                                <li>If you are being evacuated, try not to panic and avoid road rage.</li>
                                <li>If you are staying home, go to the safest part of the house (you should know this from your prep).</li>
                                <li>If there is flooding, do not go near or switch on electrical items.</li>
                                <li>Don't forget to take any regular medications or remind people you are with if they have to.</li>
                            </ul>
                        </td>
                        
                        <!-- AFTER an incident. -->
                        <td>
                            <ul>
                                <li>If you evacuated your home, check with your local council that it is safe to return.</li>
                                <li>Try to help your neighbours or people in need.</li>
                                <li>Check for gas leaks or loose/broken electrical cables.  If you find anything suspicious - report it to your local authority.</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        
            <br>
        
            <h2>Useful Websites</h2> <hr>
            
            <h3>World-wide News Sites</h3>
            <ul>
                <li><a href="http://www.reuters.com" target="_blank">Reuters (USA)</a></li>
                <li><a href="http://uk.reuters.com" target="_blank">Reuters (UK)</a></li>
                <li><a href="http://www.bbc.com/news/world" target="_blank">BBC World News</a></li>
                <li><a href="http://www.bbc.co.uk/programmes/articles/25lGfHqsvqPgsTVM6z88WGD/bbc-fm-stations-around-the-world" target="_blank">BBC World Service Radio Frequencies</a></li>
                <li><a href="http://www.theguardian.com/world/natural-disasters" target="_blank">The Guardian (Natural Disasters News)</a></li>
            </ul>
            
            <h3>Advice Sites (Government)</h3>
            <ul>
                <li><a href="https://www.fema.gov/" target="_blank">Federal Emergency Management Agency (USA)</a></li>
                <li><a href="http://www.dec.org.uk" target="_blank">Disasters Emergency Committee (UK)</a></li>
            </ul>
            
            <h3>Advice Sites (Other)</h3>
            <ul>
                <li><a href="http://www.loganhealth.org/Health_Advisories/What%20to%20do%20in%20a%20Natural%20Disaster.pdf" target="_blank">What to do in a Natural Disaster (Logan Health)</a></li>
                <li><a href="http://www.ready.gov/natural-disasters" target="_blank">Ready (USA)</a></li>
                <li><a href="http://emergency.tufts.edu/guide/natural-disaster/" target="_blank">Tufts University - Office of Emergency Management</a></li>
            </ul>
            
            <h3>Charities/Volunteering</h3>
            <ul>
                <li><a href="http://www.redr.org.uk" target="_blank">redr UK</a> (you can volunteer your skills!)</li>
                <li><a href="http://www.redcross.org.uk/" target="_blank">British Red Cross</a></li>
                <li><a href="http://www.redcross.org/" target="_blank">American Red Cross</a></li>
                <li><a href="http://redcrescent.org/" target="_blank">Red Crescent</a></li>
            </ul>
            
            <h3>Information Sites</h3>
            <ul>
                <li><a href="http://www.bbc.co.uk/science/earth/natural_disasters" target="_blank">BBC</a></li>
                <li><a href="http://environment.nationalgeographic.com/environment/natural-disasters/" target="_blank">National Geographic</a></li>
            </ul>
            
            <h3>Apps</h3>
            <p>There are many apps available in the App Stores (some are listed below).  Search for "disaster" or "emergency".</p>
            <ul>
                <li><a href="https://itunes.apple.com/gb/genre/ios/id36?mt=8" target="_blank">Apple App Store</a></li>
                <li><a href="http://windows.microsoft.com/en-gb/windows-8/apps#Cat=t0" target="_blank">Windows App Store</a></li>
                <li><a href="https://appworld.blackberry.com/webstore/" target="_blank">Blackberry World App Store</a></li>
            </ul>
            
            <!-- The following form gives users the opportunity to feedback on the page. -->
            <form method="post" action="Under_Construction.html">
                <fieldset>
                    <h2>Suggestions</h2> <hr>
                    <p>If you would like to rate this page or suggest any other sites you think would be useful, please use the form below to let us know.</p>
                    
                    <!-- User details: forename, surname and email address.  Validation added via JavaScript as the user inputs their data. -->
                    <label for="name"><input class="input-block" name="name" id="name" type="text" onblur="validateForename()">
                        Forename</label>
                    <label for="surname"><input class="input-block" name="surname" id="surname" type="text" onblur="validateSurname()">
                        Surname</label>
                    <label for="email"><input class="input-block" name="email" id="email" type="email" onblur="validateEmail()">
                        Email Address</label>
                </fieldset>
                
                <!-- Page rating scale with radio buttons.  Validation undertaken when user clicks on suggestion box. -->
                <fieldset>
                    <p>I found the site:</p>
                    <label for="Rating1"><input type="radio" name="PageRating" id="Rating1" value="5" />
                        Very Helpful</label>
                    <label for="Rating2"><input type="radio" name="PageRating" id="Rating2" value="4" />
                        Useful</label>
                    <label for="Rating3"><input type="radio" name="PageRating" id="Rating3" value="3" />
                        OK</label>
                    <label for="Rating4"><input type="radio" name="PageRating" id="Rating4" value="2" />
                        Unhelpful</label>
                    <label for="Rating5"><input type="radio" name="PageRating" id="Rating5" value="1" />
                        Of No Use</label>
                </fieldset>
                
                <!-- Text box for users to suggest other useful sites. -->
                <fieldset>
                    <label>Suggestion(s)
                        <textarea name="TextArea" id="textArea" rows="4" cols="36" onfocus="validateRadioButtons()" onblur="suggestionBoxMsg()"></textarea>
                    </label>
                </fieldset>
                
                <!--Submit and clear the form buttons-->
                <fieldset>
                    <input class="button" type="submit" value="Submit">
                    <input class="button" type="reset" value="Clear">
                </fieldset>
            </form>
        </section>
              
    </body>
</html>
