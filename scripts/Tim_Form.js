/*
.js file to accompany the form page of the group website - Tim Haines
 */
"use strict";

function appear() {

document.getElementById("contactdetails").style.display = "inherit"; /*Turning the contact details element visible.*/
}

function validatenotnull() {
    var condets = document.getElementById("condets").value; //Identifying hte imput box to validate.

        if (condets === "" || condets === "Enter text here.") //Needs to detect both blank and default message.
            {alert("Please Complete your Contact Details"); //error message.
            document.getElementById("condets").value ="If you can put you contact details in here, please do, otherwise click on the 'reset' button";
            }
    else
    {document.getElementById("PartOne").submit(); //if it's not null, submit it.
                           }}       