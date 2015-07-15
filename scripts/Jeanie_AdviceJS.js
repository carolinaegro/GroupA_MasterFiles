/* Script to validate forename. */
function validateForename()
{
    /* Create a variable and store data from a form field in it. */
    var forename = document.getElementById("name").value;
    /* Create a variable to be used during the check that numbers were not inputted. */
    var alphabet = /^[0-9]+$/;
    
    /* Check the text box is not empty and does not contain any numbers. */
    if ((forename === "") || (alphabet.test(forename)))
    {
        /* If it fails the check, colour the box pink and display an error message. */
        document.getElementById("name").style.backgroundColor = "lightpink";
        alert("Please enter your forename using alphabetical characters only.");
    }
    else 
    {
        /* If it passes the check, colour the box green. */
        document.getElementById("name").style.backgroundColor = "lightgreen";
    }
}

/* Script to validate surname. */
function validateSurname()
{
    /* Create a variable and store data from a form field in it. */
    var surname = document.getElementById("surname").value;
    /* Create a variable to be used during the check that numbers were not inputted. */
    var alphabet = /^[0-9]+$/;
    
    /* Check the text box is not empty and does not contain any numbers. */
    if ((surname === "") || (alphabet.test(surname)))
    {
        /* If it fails the check, colour the box pink and display an error message. */
        document.getElementById("surname").style.backgroundColor = "lightpink";
        alert("Please enter your surname using alphabetical characters only.");
    }
    else 
    {
        /* If it passes the check, colour the box green. */
        document.getElementById("surname").style.backgroundColor = "lightgreen";
    }
}

/* Script to validate email address. */
function validateEmail()
{
    /* Create a variable and store data from a form field in it. */
    var email = document.getElementById("email").value;
    /* Create a variable to check for the @ sign and store its position. */
    var atSign = email.indexOf("@");
    /* Create a variable to check for the . sign and store its position. */
    var dotSign = email.lastIndexOf(".");

    /* Check the text box is not empty and contains the @ and . signs. */
    if ((email === "") || (atSign<1 || dotSign<atSign+2 || dotSign+2>=email.length))
    {
        /* If it fails the check, colour the box pink and display an error message. */
        document.getElementById("email").style.backgroundColor = "lightpink";
        alert("Please enter a valid email address.");
    }
    else 
    {
        /* If it passes the check, colour the box green. */
        document.getElementById("email").style.backgroundColor = "lightgreen";
    }
}

/* Script to validate radio buttons using an array. */
function validateRadioButtons()
{
    /* Create a variable that identifies the radio buttons. */
    var rating = document.getElementsByName("PageRating");
    /* Create a variable and initially set it to false. */
    var radioChecked = false;
    
    /* Create an array to check that one of the radio buttons has been selected. */
    for (i = 0; i < rating.length; i++)
    {
        if (rating[i].checked)
        {
            /* If a radio button has been selected, then set the variable to true. */
            radioChecked = true;
        }
    }
    if (!radioChecked)
    {
        /* If a radio button has not been selected, display an error message on screen. */
        alert("Please select one of the radio buttons to rate this page.  Thank you.");
    }
}

/* Script to remind user to input their suggestions if they click out of the box without inputting anything. */
function suggestionBoxMsg()
{
    /* Create a variable and store data from a form field in it. */
    var suggestions = document.getElementById("textArea").value;
    
    /* Check the text box is not empty. */
    if (suggestions === "")
    {
        /* If it fails the check, colour the box yellow and put text in the box. */
        document.getElementById("textArea").innerHTML = "Please enter your suggestions here.";
        document.getElementById("textArea").style.backgroundColor = "lightyellow";
    }
}