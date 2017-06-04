//paragraph tag called results 
var callResults = function()
{
    var result = document.getElementById("results");
    return result;
};

//User input (The information entered in the textbox)
var callInput = function()
{
    var num = document.getElementById("input").value;
    return num;
};

//Autofocus with javascript 

var javaAuto = function()
{
     document.getElementById("input").focus(); 
    
};

//Popup label not working yet D:. Note: Not part of assignment just attempting something with java. 
var popUp = document.getElementById("infoEntered").onmouseover = function()
{
     document.getElementById('number').style.display = 'block?';
    
};

//Dealing with errors. Not a number. 
var notANumber = function()
{
  if(isNaN(callInput()) == true)
      {
          callResults().innerHTML = "Not a number!";
      }
};

//Dealing with more errors. No value entered.
var noValue = function()
{
    if(callInput() == "")
        {
            callResults().innerHTML= "Input a value.";
            return false;
        }
    javaAuto();
    return true; 
};

//Fahrenheit, Celsius Conversions 
var celToFah = document.getElementById("celToFah").onclick = function()
    {
        if(noValue() == true)
            {
        callResults().innerHTML = (callInput() * 1.8 + 32).toFixed(2);
        notANumber();
            }
            
        javaAuto();
    };

var fahToCel = document.getElementById("fahToCel").onclick = function()
    {
        
        if(noValue() == true)
            {
        callResults().innerHTML = ((callInput() - 32 )/ 1.8).toFixed(2);
        notANumber();
            }
        javaAuto();
    };

//Feet, Meter Conversions   
var feetToMeter = document.getElementById("feetToMeter").onclick = function()
    {
        if(noValue() == true)
            {
        callResults().innerHTML = (callInput() / 3.2808).toFixed(2);
        notANumber();
            }
        javaAuto();
    };
var meterToFeet = document.getElementById("meterToFeet").onclick = function()
    { 
        if (noValue() == true)
            {
        callResults().innerHTML = (callInput() * 3.2808).toFixed(2);
        notANumber();
            }
        javaAuto();
    };

//Centimeters, Inches Conversions   
var centiToMeter = document.getElementById("centiToMeter").onclick = function()
    {
        
        if(noValue() == true)
            {
        callResults().innerHTML = (callInput() / 0.39370).toFixed(2);
        notANumber();
            }
    };
var meterToCenti = document.getElementById("meterToCenti").onclick = function()
    { 
        
        if(noValue() == true)
            {
        callResults().innerHTML = (callInput() * 0.39370).toFixed(2);
        notANumber();
            }
        javaAuto();
    };

//Pounds, Kilograms Conversions 
var poundsToKilo = document.getElementById("poundsToKilo").onclick = function()
    {
        
        if(noValue() == true)
            {
        callResults().innerHTML = (callInput() / 2.2046).toFixed(2);
        notANumber();
            }
        javaAuto();
    };
var kiloToPounds= document.getElementById("kiloToPounds").onclick = function()
    { 
        
        if(noValue() == true)
            {
        callResults().innerHTML = (callInput() * 2.2046).toFixed(2);
        notANumber();
            }
        javaAuto();
    };

//Clears the textbook and paragraph.

var clear = document.getElementById("clear").onclick = function()
{
    document.getElementById("Forms").reset();
    callResults().innerHTML = "";
    document.getElementById("input").focus();
}


