
// fiveCharacterLong function checks if function input variable(a) is less then 5. If less then 5 return false, greater return true.
var fiveCharacterLong  = function(a)
{
    var theLength = a.length; 
    if(theLength < 5)
        {
            return false;
        }
    else
        {
    return true;
        }
};

// notEmpty function checks if function input variable(a) is equal to null or blank. If it is empty then return false, otherwise true.
var notEmpty = function(a)
{
    if(a == null || a == "")
        {
            return false;
        }
    else
        {
            return true;
        }
};

// passwordMatch function gives an unicode check if match or an unicode x if not. 
var passwordMatch = function()
{
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
    var spanConfirmPassword = document.getElementById("spanConfirmPassword");

    if(password === confirmPassword)
        {
           spanConfirmPassword.innerHTML = "\u2714"; 
            
        }
    else
        {
            spanConfirmPassword.innerHTML = "\u2716";
        }
};

// emailVlid function tries to validate email. 
var emailValid = function()
{
    var email = document.getElementById("emailID").value; 
    var spanEmailID = document.getElementById("spanEmailID");
    var e1 = email.indexOf("@");
    var e2 = email.lastIndexOf(".");
    
    if(e1 < 1 || (e2 - e1 < 2))
    {
        spanEmailID.innerHTML =  "\u2716";
    }
    else
    {
        spanEmailID.innerHTML = "\u2714";  
         
    }
};

//contactNumberValid checks through the 10 digits to make sure each are numbers. 
var contactNumberValid = function()
{
    var counter = 0; 
    var contactNumber = document.getElementById("contactNumber").value;
   
    var spanContactNumber = document.getElementById("spanContactNumber");
    if(contactNumber != "" && contactNumber.length == 10)
        {
            for(var i = 0; i < contactNumber.length; i++)
                {
                    if(isNaN(contactNumber.charAt(i)) == false)
                        {
                            counter++;
                        }
                }
            if (counter == 10)
                {
            spanContactNumber.innerHTML = "\u2714";
                     
                }
            else
                {
                    spanContactNumber.innerHTML = "\u2716";
                }
        }
    else
        {
            spanContactNumber.innerHTML = "\u2716";
        }
};

//Gobal variables set for Gender. 
var female = document.getElementById("female");
var male = document.getElementById("male");
var other = document.getElementById("other");
var spanGender  = document.getElementById("spanGender");

female.onblur = function()
{
    //spanGender.innerHTML = "Hello";
    verifyRadio();
}

male.onblur = function()
{
    //spanGender.innerHTML = "Hello";
    verifyRadio();
}

other.onblur = function()
{
    //spanGender.innerHTML = "Hello";
    verifyRadio();
}

//verifyRadio cheecks to ensure one radio button is checked. 
var verifyRadio = function()
{
    if (!female.checked && !male.checked && !other.checked)
        {
           spanGender.innerHTML = "\u2716";
           
        }
    else
        {
         spanGender.innerHTML = "\u2714";
             
        }
};



// executeValid function tries to validate userName and password. 
var executeVaild = function()
{
    
var userName = document.getElementById("userName").value;
var spanUserName = document.getElementById("spanUserName");

    if(fiveCharacterLong(userName) == true && notEmpty(userName) == true)
     {
         spanUserName.innerHTML = "\u2714";
          
     }
    else
    {
        spanUserName.innerHTML = "\u2716";
    }

var password = document.getElementById("password").value;
var spanPassword = document.getElementById("spanPassword");

    if(fiveCharacterLong(password) == true && notEmpty(password) == true)
        {
            spanPassword.innerHTML = "\u2714";
            
        }
    else
        {
            spanPassword.innerHTML = "\u2716";
        }
    
};


//myReset function resets the entire form 
function myReset()
{
  document.getElementById("myForm").reset();
};

