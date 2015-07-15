 
 //CLEAR Button
 function CLR(){
            /* document.getElementById('boxa').style.backgroundColor = "white";*/
            
             document.getElementById('hintEM').innerHTML = ""; 
             document.getElementById('hintFN').innerHTML ="";
             document.getElementById('hintLN').innerHTML ="";
             document.getElementById('hintAD1').innerHTML ="";
             document.getElementById('hintCT').innerHTML ="";
             document.getElementById('hintST').innerHTML ="";
             document.getElementById('hintMoney').innerHTML ="";
             document.getElementById('hintDonerType').innerHTML ="";
             document.getElementById('hintCTRY').innerHTML ="";
             document.getElementById('hintPYM').innerHTML = "";
             document.getElementById('hintCC').innerHTML = "";
             document.getElementById('hintCH').innerHTML = "";
             
         }//resetting all hints


//Validate ALL
function validateALL(){
    ifEmail();
    ifFirstName();
    ifLastName();
    ifAddress1();
    ifCity();
    ifState();
    ifCountry();
    ifMoney();
    ifDonerType();
    emailEquality();
    ifPaymentMethod();
}



//EMAIL validation

function validateEmail(email)
{
var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

if (reg.test(email)){
return true; }
else{
return false;
}
} 

function ifEmail()
{

var em =document.getElementById("em1").value;
var em2 =document.getElementById("em2").value;

if (em==null || em=="" || em2==null || em2=="")
  {
  document.getElementById('hintEM').innerHTML = "Email is required for us to send you Receipt of your donation"; 
  //return false;
  }
else 
  {
           
                if (validateEmail(em) === false || validateEmail(em2) === false)
                {
                document.getElementById('hintEM').innerHTML = "Invalid Email format"; 
                  //return false;
                }
                
                
   }

}

//validate emial1 to be equal email2
function emailEquality(){
 var em =document.getElementById("em1").value;
    var em2 =document.getElementById("em2").value;
    if (em!==em2){
       document.getElementById('hintEM2').innerHTML = "Email do not match";  
    }


}
//Validate First Name field

function ifFirstName()
{
    
var fn=document.getElementById("fn").value;

if (fn==null || fn=="")
  {
  document.getElementById('hintFN').innerHTML = "First Name must be filled out";
  //return false;
  }
  }

//Validate Last Name field

function ifLastName(){
var ln=document.getElementById("ln").value;

if (ln===null || ln==="")
  {
  document.getElementById('hintLN').innerHTML = "Last Name must be filled out";
 // return false;
  }
  }
  

//Validate Address 1 field

function ifAddress1(){
var ad1=document.getElementById("ad1").value;

if (ad1===null || ad1==="")
  {
  document.getElementById('hintAD1').innerHTML = "Address must be filled out";
  //return false;
  }
  
  
    }


//Validate City

function ifCity(){

var ct=document.getElementById("ct").value;

if (ct==null || ct=="")
  {
  document.getElementById('hintCT').innerHTML = "City must be filled out";
  //return false;
  }
  }


//Validate State if country is USA

function ifState(){
var st=document.getElementById("st").value;
var ctry=document.getElementById("ctry").value;

if ((st===null || st==="") && ctry==="US")
  {
  document.getElementById('hintST').innerHTML = "State must be filled out for USA";
  //return false;
  }
  }



/*
 * 
 function ifPaymentMethod(){
    
 var radioMethod = document.getElementByName("method");
 var methodValid=false;
 
 var i=0;
 while (!methodValid && i < radioMethod.length){
     
    if (!methodValid) {
        document.getElementById('hintPYM').innerHTML = "Please select one option";
         return methodValid=true;   
     
  }
  }
 */


//validate Money amount radio buttons
function ifMoney(){
    var moneyAmount = document.getElementsByName("money");
    var moneyValid = false;

    var i = 0;
    while (!moneyValid && i < moneyAmount.length) {
        if (moneyAmount[i].checked) moneyValid = true;
        i++;        
    }

    if (!moneyValid) {
        document.getElementById('hintMoney').innerHTML = "Please select an amount you wish to donate";
         return moneyValid=true;
    }
  
   
}


// if Doner is an Organization, Organization field will appaear, else it will be hidden

function ifOrgDonerType(){
   var donertypeInd = document.getElementById("ind");
   var donertypeOrg = document.getElementById("org");
    if ((donertypeInd.checked === false || donertypeInd.checked === true) && donertypeOrg.checked === false);
{
 
 document.getElementById("orgnametext").style.visibility = "hidden";

 }
 
 var donertype = document.getElementsByName("donertype");
     if (donertype[0].checked === true)
     {document.getElementById("orgnametext").style.visibility = "hidden";
         
     }
     if (donertype[1].checked === true)
       {document.getElementById("orgnametext").style.visibility = "visible";
           CLR();
       }
                                      
      
}


// if Payment Type Credit Card, CC fields will appaear, else Checking Account fields will appear

function ifPaymentType(){

 var paymentMethodCC = document.getElementById("cc");
 var paymentMethodCH = document.getElementById("ch");
     if (paymentMethodCC.checked === true && paymentMethodCH.checked === false)
     {document.getElementById("CCfields").style.visibility = "visible";
         document.getElementById("CHfields").style.visibility = "hidden";
         document.getElementById('hintCC').innerHTML = "Please fill all fileds";
          document.getElementById('hintCH').innerHTML = "";
             }
      if (paymentMethodCH.checked === true && paymentMethodCC.checked === false)
     {document.getElementById("CHfields").style.visibility = "visible";
      document.getElementById("CCfields").style.visibility = "hidden";
      document.getElementById('hintCH').innerHTML = "Please fill all fileds BELOW";
      document.getElementById('hintCC').innerHTML = "";
         }
     }
    
  
 
 

function ifPaymentMethod(){
    
 var radioMethod = document.getElementsByName("method");
 var methodValid = false;
 
 var i = 0;
 while (!methodValid && i < radioMethod.length){
    if (radioMethod[i].checked) methodValid = true;
        i++; 
    }
    if (!methodValid) {
        document.getElementById('hintPYM').innerHTML = "Please select one option";
        return methodValid=true;
    }    
    }
  
  /*
 //validate Money amount radio buttons
function ifMoney(){
    var moneyAmount = document.getElementsByName("money");
    var moneyValid = false;

    var i = 0;
    while (!moneyValid && i < moneyAmount.length) {
        if (moneyAmount[i].checked) moneyValid = true;
        i++;        
    }

    if (!moneyValid) {
        document.getElementById('hintMoney').innerHTML = "Please select an amount you wish to donate";
         return moneyValid=true;
    }
  
   
}

 
 /*
function ifPaymentMethod(){
    
 var paymentMethodCC = document.getElementById("cc");
 var paymentMethodCH = document.getElementById("ch");
     if (paymentMethodCC.checked === false && paymentMethodCH.checked === false){
    document.getElementById('hintPYM').innerHTML = "Please selct one option";
  //return false;
  }
  }
*/

/*
 function ifDonerType() {
   var donertypeInd = document.getElementById("ind");
   var donertypeOrg = document.getElementById("org");
    if ((donertypeInd.checked === false && donertypeOrg.checked === false) || (donertypeInd.checked === true && donertypeOrg.checked === true))
    {               
        document.getElementById('hintDonerType').innerHTML = "Please select JUST one option";
    } 
    }
 
*/
function ifCountry()
{
    
var ctry=document.getElementById("ctry").value;

if (ctry==null || ctry=="")
  {
  document.getElementById('hintCTRY').innerHTML = "Country must be selected";
  //return false;
  }
  }

 
  
   /* 
    function ifDoner(){
   var donertypeInd = document.getElementById("ind");
   var donertypeOrg = document.getElementById("org");
 if(donertypeInd.checked === false && donertypeOrg.checked === false){
              document.getElementById('hintDonerType').innerHTML = "Please select one option"; 
          }
          CLR();
     
 }
    */
    