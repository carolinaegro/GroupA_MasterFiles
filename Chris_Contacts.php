<!DOCTYPE html>
<html>
    <head>
        <title>About</title>

        <?php include ("header.php"); ?>
        
        <script src="scripts/chris_validation.js"></script>
        
    </head>
    <body>
        
         <section class="main-content">
            <section class="the-team">
                <form id="successMessage" class="noDisplay">
                    <span class="success">
                        Your message has been submitted successfully.
                    </span>
                    <label>
                        Thank you
                        <input id="successName" type="text" disabled>
                    </label>
                    <label>
                        Your information was submitted as follows:
                        <textarea id="successComment" class="input-block"  name="query" rows="4" cols="36" disabled></textarea>
                    </label>
                    <label>
                        Reference number
                        <input id="referenceNumber" type="text" disabled>
                    </label>
                </form>
                <form id="team-contact" onsubmit="return validate(event)">
                    <fieldset>
                        <legend>Contact the Team</legend>
                        <span id="userNameError" class="error-message noDisplay">
                            Invalid name, please input more than 3 characters
                        </span>
                        <label>
                            Name
                            <input id="userName" class="input-block" name="name" type="text">
                        </label>
                        <span id="userEmailError" class="error-message noDisplay">
                            Invalid email address.
                        </span>
                        <label>
                            Email Address
                            <input id="userEmailAddress" class="input-block" name="EmailAddress" type="email">
                        </label>
                        <span id="userCommentError" class="error-message noDisplay">
                            Invalid comment.
                        </span>
                        <label>
                            Query (No longer than 200 characters)
                            <textarea id="userComment" class="input-block"  name="query" rows="4" cols="36"></textarea>
                        </label>
                    </fieldset>
                    <fieldset>
                        <input class="button" type="submit" value="Submit">
                        <input class="button" type="reset" value="Clear" onclick="clearForm();">
                    </fieldset>
                </form>
            </section>
        </section>
    </body>
</html>