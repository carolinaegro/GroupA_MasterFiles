/*
.js file to accompany the form page of the group website - Tim Haines
 */
"use strict";

function appear() {
document.getElementById("detail").value=1;
document.getElementById("contactdetails").style.display = "inherit"; /*Turning the contact details element visible.*/
//alert("appear");
}

function validateForm() 
{
	var condets = document.getElementById("condets").value; //Identifying hte imput box to validate.
	var isdetails=document.getElementById("detail").value;
	var submittingname=document.getElementById("submittingname").value;
	//alert("Condets" +condets);
	//alert("Is details" +isdetails);
	//alert("submittingname" +submittingname);

	if(isdetails=="0")
	{

        document.getElementById("myForm").action = "Tim_Form_Process.php";
		document.getElementById("myForm").submit();	
		return true;
	}
	else
	{
		if (condets=="")
		{
			alert("Please enter your name.  Otherwise click on the 'reset' button.");
      		return false;	
		}
		else if (submittingname=="")
		{
			alert("Please enter your Contact Details.  Otherwise click on the 'reset' button.");
      		return false;		
		}
		else	
		{
			document.getElementById("myForm").action = "Tim_Form_Process.php";
			document.getElementById("myForm").submit();	
			return true;
		}	
	}	
}       