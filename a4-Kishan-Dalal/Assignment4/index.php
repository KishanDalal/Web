<html>
    <head>
        <h1>Tim Hortons!</h1>
        <link rel="stylesheet" type="text/css" href="css/myStyles.css">
        <title>Time Horton's Orders</title>
    </head>
    
    <body>
        <img id="Tim" src="img/Tim.jpg" alt="TimHortons">
        <br>
       
        <p>
            <div id="form">
           <img id="Tim2" src="img/Tim2.jpg" alt="Tim2">  
            <h3 id="order">Enter your order here</h3>
            <form id="formInput" action="order.php" method="post">
                <div>Number of Coffees: </div><input type="number" name="coffee" min="1" max="10" required><br>
                <span id="coffeeSpan"></span>
                
                <div>Size: </div>
                <select name="size">
                    <option value="XLarge">Extra Large</option>
                    <option value="Large" selected>Large</option>
                    <option value="Medium">Medium</option>
                    <option value="Small">Small</option>
                </select>
                
                <div>How many creams?</div><input type="number" name="cream" min="0" max="10" required><br>
                <div>How many sugars?</div><input type="number" name="sugar" min="0" max="10" required><br>
                
                <input type="submit" name="Order Coffee">                
            </form>
                
            </div>
            
        </p>
        
   
    </body>
    
</html>