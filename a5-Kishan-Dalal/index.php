<?php
session_start();
/*
Name: Kishan Dalal
Assignment number: 5
Program: If digits entered correctly, breifcase opens. 
Due date: March 30 2016

*/
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <h1>BriefCase!</h1>
   
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>Please enter 3 numbers: </label>
        
        <input id="number1" type="number" min="0" max="9" name="number1"  onfocus="disableValue1()" required>
        <input type="hidden" id="number1Hidden" value="<?php echo $_SESSION['snumber1Hidden']; ?>">    
        
        <input id="number2" type="number" min="0" max="9" name="number2" onfocus="disableValue2()" required>
        <input type="hidden" id="number2Hidden" value="<?php echo $_SESSION['snumber2Hidden']; ?>">   
        
        <input id="number3" type="number" min="0" max="9" name="number3" onfocus="disableValue3()" required>
        <input type="hidden" id="number3Hidden" value="<?php echo $_SESSION['snumber3Hidden']; ?>">  
        
        <input type="submit" value="Enter Pin">
        
    </form>
    
    <form action="breif.php" method="post">
    <input type="submit" value="Reset" id="Reset">
    </form>
</body>
   
    <!--- JAVASCRIPT -->
    <script>
        
    var disableValue1 = function()
    {
        $number1Value = document.getElementById("number1Hidden").value;
        if($number1Value == true)
            {
                document.getElementById("number1").disabled = true; 
                alert("You have already guessed the value correct!");
            }
    };
    
    var disableValue2 = function()
    {
        $number2Value = document.getElementById("number2Hidden").value;
        if($number2Value == true)
            {
                document.getElementById("number2").disabled = true; 
                alert("You have already guessed the value correct!");
            }
    };
        
    var disableValue3 = function()
    {
        $number3Value = document.getElementById("number3Hidden").value;
        if($number3Value == true)
            {
                document.getElementById("number3").disabled = true; 
                alert("You have already guessed the value correct!");
            }
    };
    
    </script>
    
    <!--- PHP -->
    <?php
    if($_SESSION['reset'] == true)
    {
            session_unset();
            echo '<div style = "width=300; height=300; border-style:dotted; border-color:grey; background-color:cyran;">';
            echo '<img src="img/close.jpg" alt="open" width="300" height="300">';
            echo '</div>';
    }
    echo "The session value is ".$_SESSION['test'];

    
    $_SESSION['snumber1Hidden'] = false;
    $_SESSION['snumber2Hidden'] = false;
    $_SESSION['snumber3Hidden'] = false;
    
    function guessValues($computerGenNumber, $numberGuess)
    {
        if($computerGenNumber === $numberGuess)
        {
            return true;
        }
       return false; 
    }
    
    $num1 = $_POST["number1"];
    $num2 = $_POST["number2"];
    $num3 = $_POST["number3"];

    if(isset($num1) && isset($num2) && isset($num3) && is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) //Checks if something was entered and it was a number
    {
        if($num1 >= 0 && $num1 <= 10 && $num2 >= 0 && $num2 <= 10 & $num3 >= 0 && $num3 <= 10) // In case they disable html attributes. 
        {
            if(!$_SESSION['test']) //If there are no current sessions. 
                {
                    $computerGen = rand(1,999); //Has to be 3 digits! 
                    //Padding to make numbers 3 digits long!
                    if(strlen($computerGen) == 2)
                    {
                    $computerGen = "0".$computerGen;
                    //echo "Check 1 <br>";
                    }
                    else if(strlen($computerGen) == 1)
                    {
                        $computerGen = ("0"."0".$computerGen); 
                        // echo "Check 2 <br>";
                    }
                $_SESSION['test'] = $computerGen;
                //echo "New Session created";
                }



        echo "<br>";
        echo "The first number is you guessed is $num1. <br>";
        echo "The second number you guessed is $num2. <br>";
        echo "The third number you guessed is $num3. <br>";
        //echo "This is compgen $computerGen <br>"; 
        echo "<br>";
        echo "This is the compuer generated number ".$_SESSION['test']."<br>";
        echo "<br>";
            
        //Redunent, Could have randomly generated numbers for 3 invidiaul values rather then substring it from one computer generated number. Note to self:  review subStrings. 
        $computerGenNum1 = substr($_SESSION['test'], 0, 1);
        $computerGenNum2 = substr($_SESSION['test'], 1, 1);
        $computerGenNum3 = substr($_SESSION['test'], 2, 2);
        echo "The computer generated number value 1 is $computerGenNum1 <br>";
        echo "The computer generated number value 2 is $computerGenNum2 <br>";
        echo "The computer generated number value 3 is $computerGenNum3 <br>"; 
        echo "<br>";
            
        $digitCorrectCounter = 0;
        $num1Guess = false;
        $num2Guess = false;
        $num3Guess = false;
            
        if($num1Guess == false)
        {
            $a = guessValues($computerGenNum1, $num1);
            if($a == true)
            {
                $num1Guess = true; 
                //Restrict for input here 
                $_SESSION['snumber1Hidden'] = true;
                echo "You guessed the first number correct. <br>";
                $digitCorrectCounter++;
            }
        }
         if($num2Guess == false)
        {
           $b = guessValues($computerGenNum2, $num2);
            if($b == true)
            {
                $num2Guess = true; 
                //Restrict for input here 
                $_SESSION['snumber2Hidden'] = true;
                echo "You guessed the second number correct. <br>";
                $digitCorrectCounter++;
            }
        }
         if($num3Guess == false)
        {
           $c =  guessValues($computerGenNum3, $num3);
            if($c == true)
            {
                $num3Guess = true; 
                //Restrict for input here
                $_SESSION['snumber3Hidden'] = true;
                echo "You guessed the third number correct. <br>";
                $digitCorrectCounter++;
            }
        }
        
        echo "The amount of numbers you got correct is ".$digitCorrectCounter; 
        
        if($num1Guess == true && $num2Guess == true && $num2Guess == true)
        {
            echo '<div style = "width=300; height=300; border-style:dotted; border-color:grey; background-color:cyran;">';
            echo '<img src="img/open.jpg" alt="open" width="300" height="300">';
            echo '</div>';
        }
        else
        {
            echo '<div style = "width=300; height=300; border-style:dotted; border-color:grey; background-color:cyran;">';
            echo '<img src="img/close.jpg" alt="close" width="300" height="300">';
            echo '</div>';
        }
            
        }
    }
   
    //session_unset();
    ?>
</html>