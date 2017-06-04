<?php
ob_start();
session_start();
?>
<?php
//Attempts to reset remove the sessions. 
$_SESSION['reset'] = true;
echo $_SESSION['reset'];
header('Location: index.php');
     //echo '<div style = "width=300; height=300; border-style:dotted; border-color:grey; background-color:cyran;">';
    //        echo '<img src="img/close.jpg" alt="open" width="300" height="300">';
    //        echo '</div>';
?>