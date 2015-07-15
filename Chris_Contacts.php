<!DOCTYPE html>
<html>
    <head>
        <title>Contact us</title>

        <?php include ("header.php"); ?>
        
    </head>
    <body>
        
        <?php
            //Check if form has been submitted
            if($_SERVER['REQUEST_METHOD']=='POST'){
                
                //Catch inputs from form
                $name = $_POST['name'];
                $email = $_POST['emailAddress'];
                $queryType = $_POST['contactType'];
                $queryText = $_POST['query'];
                   
                //Regex
                //Checks for alpha characters length 1 to 32
                $nameReg = '/^[[:alpha:]]{1,32}$/';
                //Checks email address has @ symobol preceded by strong, 
                //succeded by strong after a period again succeded by string
                $emailReg = '/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/';
                //Checks for string from 1 to 200 characters
                $queryReg = '/^.{1,200}$/';
                
                //Runs validation on name input
                $nameResult = preg_match($nameReg, $name);
                //Runs validation on email input
                $emailResult = preg_match($emailReg, $email);
                //Runs validation on queryType input, if the radio is set to default
                //i.e the user hasnt sumitted anything
                $queryTypeResult = 1;
                if($queryType === 'default'){
                    $queryTypeResult = 0;
                }
                //Runs validation on query input
                $queryResult = preg_match($queryReg, $queryText);
                
                
                //Check that all fields pass validation
                if(($nameResult === 0) 
                OR ($emailResult === 0) 
                OR ($queryType === 0) 
                OR ($queryResult === 0)){
                    $error = "The was an error on the form";
                } else {
                    //connect to database
                    include('chris_connection.php');
                    
                    try {
                        $sql = "INSERT INTO contact_response (name, emailAddress, queryType, query)
                        VALUES (:name, :emailAddress, :queryType, :query)";
                        $query = $dbc->prepare($sql);
                        $query->execute( 
                                array( 
                                    ':name'=>$name, 
                                    ':emailAddress'=>$email, 
                                    ':queryType'=>$queryType, 
                                    ':query'=>$queryText)
                                );
                    }
                    catch(PDOException $e) {
                        //Should only output for developers, gives helpful information about why the Database query failed
                        //echo $sql . "<br>" . $e->getMessage();
                    }
                    //Close Database connection
                    $dbc = null;
                }
            }
        ?>
        
         <section class="main-content">
            <section class="the-team">
                <?php 
                    if(isset($error)){
                        echo '<span class="error-message">' . $error . '</span>';
                    }
                ?>
                <form id="team-contact" method="POST" action="Chris_Contacts.php">
                    <fieldset>
                        <legend>Contact the Team</legend>
                        <label>
                            Name  (No longer than 32 characters)
                            <input id="userName" 
                                   class="input-block" 
                                   name="name" 
                                   type="text" 
                                   value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"
                            >
                        </label>
                        <label>
                            Email Address
                            <input id="userEmailAddress" 
                                   class="input-block" 
                                   name="emailAddress" 
                                   type="email"
                                   value="<?php echo isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '' ?>"
                            >
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Type of query</legend>
                        <label>
                            <input name="contactType" type="radio" value="general" 
                                <?php 
                                    if(isset($_POST['contactType']) && ($_POST['contactType'] === 'general')){
                                        echo "checked";
                                    } 
                                ?>
                            >
                            General 
                        </label>
                        <label>
                            <input name="contactType" type="radio" value="bug"
                                <?php 
                                    if(isset($_POST['contactType']) && ($_POST['contactType'] === 'bug')){
                                        echo "checked";
                                    } 
                                ?>
                            >
                            Bug Submission
                        </label>
                        <label>
                            <input name="contactType" type="radio" value="inappropriate"
                                <?php 
                                    if(isset($_POST['contactType']) && ($_POST['contactType'] === 'inappropriate')){
                                        echo "checked";
                                    } 
                                ?>
                            >
                            Inappropriate content
                        </label>
                        <label>
                            <input name="contactType" type="radio" value="default" hidden
                                <?php
                                   if(!isset($_POST['contactType'])){
                                       echo "checked";
                                   }
                                ?>
                            >
                        </label>
                    </fieldset>
                    <fieldset>
                        <legend>Query (No longer than 200 characters)</legend>
                        <label>
                            <textarea id="userComment" class="input-block"  name="query" rows="4" cols="36"><?php echo isset($_POST['query']) ? $_POST['query'] : '' ?></textarea>
                        </label>
                    </fieldset>
                    <fieldset>
                        <input class="button" type="submit" value="Submit">
                        <input class="button" type="reset" value="Clear">
                    </fieldset>
                </form>
            </section>
        </section>
    </body>
</html>