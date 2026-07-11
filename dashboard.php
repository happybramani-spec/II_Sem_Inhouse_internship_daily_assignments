<?php
include("dashheader.php");
include("dashvertical.php");

?>
    
    <h2>
        <?php echo "Welcome, " . $_SESSION["user_name"] . "!";
        ?> 
    </h2>

<?php
include("dashfooter.php");
include("footer.php");
?>