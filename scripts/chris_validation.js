var validate = function(event){
    var formContent;
    var validContent;
    
    //Returns values from the form inputs
    formContent = getFormContent();
    
    //Return true or false for each input when input is valid or invalid
    validContent = validateFormContent(formContent);
    
    //If the validation fails return false to the form and prevent its submission
    if(!validContent) {
        event.preventDefault();
        return false;
    }
    //If the validation is successful display success message
    if (validContent){
        document.getElementById('team-contact').className = "noDisplay";
        document.getElementById('successMessage').className = "success-message";
        document.getElementById('successName').value = formContent[0];
        document.getElementById('successComment').value = formContent[2];
        //Randomly generates a 5 digit number as a refernce number
        document.getElementById('referenceNumber').value = Math.floor(Math.random()*90000) + 10000;
    }
    
    
    //Prevent for from submitting to server if cient side validation fails
    event.preventDefault();
    return false;
};

//Clears all error/success messages from form
var clearForm = function(){
    console.log('form cleared');
    document.getElementById('userNameError').className = "error-message noDisplay";
    document.getElementById('userEmailError').className = "error-message noDisplay";
    document.getElementById('userCommentError').className = "error-message noDisplay";
    document.getElementById('successMessage').className = "success-message noDisplay";
    
};

//Returns values from the form inputs
var getFormContent = function() {
    var userName, userEmailAddress, userComment;
    userName = document.getElementById('userName').value;
    userEmailAddress = document.getElementById('userEmailAddress').value;
    userComment = document.getElementById('userComment').value;
    return [userName, userEmailAddress, userComment];
};

//Return false if form inputs are invalid
var validateFormContent = function(formContent){
    var userName = formContent[0];
    var userEmail = formContent[1];
    var userComment = formContent[2];
    
    //Validate user's name must be more than 1 character and less than 20
    var namePattern = /^[a-zA-Z0-9\s]{1,20}$/;
    
    //Validate user's email, must have an @ sign and at least one '.' after the at.
    var userEmailPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    
    //Validate user's name must be more than 1 character and less than 200
    var userCommentPattern = /^[a-zA-Z0-9\s]{1,200}$/;
    
    //Validate user's name must be more than 1 character and less than 20
    if(!namePattern.test(userName)){
        userName = false;
        //show error message
        document.getElementById('userNameError').className = "error-message";
    } else {
        userName = true;
        //Hide error message
        document.getElementById('userNameError').className = "error-message noDisplay";
    }
    
    //Validate user's email address
    if(!userEmailPattern.test(userEmail)) {
        userEmail = false;
        //show error message
        document.getElementById('userEmailError').className = "error-message";
    } else {
        userEmail = true;
        //Hide error message
        document.getElementById('userEmailError').className = "error-message noDisplay";
    }
    
    //Validate user's comment must be more than 3 characters less than 200
    if(!userCommentPattern.test(userComment)){
        userComment = false;
        //show error message
        document.getElementById('userCommentError').className = "error-message";
    } else {
        userComment = true;
        //Hide error message
        document.getElementById('userCommentError').className = "error-message noDisplay";
    }
    
    //Check all 3 inputs are valid
    if(userName && userEmail && userComment){
        return true;
    }
    return false;
};