
<html>
    <title>Tim Hortons</title>
    <h1>Tim Hortons</h1>
    <body style="background-color:lightblue">
        
        <div></div>
        <?php
        //ob_start();
$coffeeNum = $_POST["coffee"];
$coffeeSize = $_POST["size"];
$coffeeCream = $_POST["cream"];
$coffeeSugar = $_POST["sugar"];

//Saves user values into an array which is called later
$arrayCheck = array(array($coffeeNum, "CoffeeNum"), array($coffeeSize, "CoffeeSize"), array($coffeeCream, "CoffeeCream"), array($coffeeSugar, "CoffeeSugar"));

 //Shows user values!
echo '<div style= "width=200; height=200; border-style:dotted; border-color:grey;  margin: 20px 20px 5px 5px; background-color:cryan";>';
echo "Your Order is: <br>";
echo "Number of coffee ordered is $coffeeNum <br>";
echo "The coffee size is $coffeeSize <br>";
echo "Cream amount is $coffeeCream <br>";
echo "The amount of sugar in the coffee is  $coffeeSugar <br>"; 
echo '</div>';

//Error checking tried to re-direct but header didn't work so output will be shown in order.php 
for($a = 0; $a < count($arrayCheck); $a++)
{
    
    if(isset($arrayCheck[$a][0]) && !empty($arrayCheck[$a][0]) && is_numeric($arrayCheck[$a][0]) == true)
    {
       // echo "This works + $arrayCheck[$a]";
    }
    else
    {
        if(is_string($arrayCheck[1][0]))
        {
            
        }
        else
        {
        //header('http://mobile.sheridanc.on.ca/~dalalkis/AssignmentLocation/Assignment4/');
        echo "This is empty! ".$arrayCheck[$a][1].". <br>";
        }
    }
}
    
//Image outputs 
    while($coffeeNum != 0)
    {
        
        echo '<div style= "width=800; height=800; border-style:solid; margin: 20px 20px 5px 5px; background-color:white;">';
        $XLarge = '<img src="img/cup.jpg" alt="cupXLarge" width="150" height="200">';
        $Large = '<img src="img/cup.jpg" alt="cupLarge" width="120" height="160">';
        $Medium = '<img src="img/cup.jpg" alt="cupMedium" width="90" height="120">';
        $Small = '<img src="img/cup.jpg" alt="cupSmall" width="60" height="80">';
        
        switch ($coffeeSize) 
        {
        case "XLarge":
            echo $XLarge;
            break;
        case "Large":
            echo $Large;
            break;
        case "Medium":
            echo $Medium;
            break;
        case "Small":
            echo $Small;
            break;
        default:
            echo "Coffee?!";
        }
        
       if($coffeeSugar != 0)
       {
        echo '<img src="img/plus.jpg" alt="plus>';
           for($i = 0; $i<$coffeeSugar+1; $i++)
            {
                echo '<img src="img/sugar.jpg" alt="sugar">';
            }
       }
        
        
       if($coffeeCream != 0)
       {
                       
           echo '<img src="img/plus.jpg" alt="plus">';
           for($a = 0; $a<$coffeeCream; $a++)
            {
               echo '<img src="img/cream.jpg" alt="cream">';
            }
       }
        echo '<br>';
        $coffeeNum--; 
        echo '</div>';
    };
          
?>
        
    <?php
        //Money calculations! 
    $coffeeNum = $_POST["coffee"];
    $coffeeSize = $_POST["size"];
    $coffeePriceXLarge = 2.00; 
    $cofeePriceLarge = 1.80;
    $coffeePriceMedium = 1.60;
    $coffeePriceSmall = 1.40; 
    
    function tax($coffeePrice, $coffeeNum)
    {
        for($i = 0; $i<coffeeNum+1; $i++)
        {   
        $taxz = ($taxz + ($coffeePrice * 0.13)); 
        }
       return $taxz;
    };
         echo '<div style= "width=200; height=200; border-style:solid; margin: 20px 20px 5px 5px; background-color:gray;">';
    
      switch ($coffeeSize) 
        {
        case "XLarge":
            $result = (($coffeePriceXLarge * $coffeeNum) - tax($coffeePriceXLarge, $coffeeNum));
            echo "Cost: $".$coffeePriceXLarge." x ".$coffeeNum." + ".tax($coffeePriceXLarge, $coffeeNum)." = $".$result;
              //tax($coffeePriceXLarge, $coffeeNum);
            break;
        case "Large":
            $result = (($coffeePriceLarge * $coffeeNum) - tax($coffeePriceLarge, $coffeeNum));
            echo "Cost: $".$coffeePriceLarge." x ".$coffeeNum." + ".tax($coffeePriceLarge, $coffeeNum)." = $".$result;
            break;
        case "Medium":
            $result = (($coffeePriceMedium * $coffeeNum) - tax($coffeePriceMedium, $coffeeNum));
            echo "Cost: $".$coffeePriceMedium." x ".$coffeeNum." + ".tax($coffeePriceMedium, $coffeeNum)." = $".$result;
            break;
        case "Small":
            $result = (($coffeePriceSmall * $coffeeNum) - tax($coffeePriceSmall, $coffeeNum));
            echo "Cost: $".$coffeePriceSmall." x ".$coffeeNum." + ".tax($coffeePriceSmall, $coffeeNum)." = $".$result;
            break;
        default:
            echo "Coffee?!";
            
      }
        
    echo '</div>';
        ?>
        
    
    </body>
</html>

