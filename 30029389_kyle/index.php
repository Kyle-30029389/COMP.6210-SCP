<!--
    Kyle Fogarty-Anderson
    30029389
    index.html
-->
<?php include("common-top.php"); ?>

<img class="logoimage" src="./images/Logo.svg" alt="logo">
<button type="button" class="left" onclick="Left()">&#8249;</button>     <!--left button-->
<button type="button" class="right" onclick="Right()">&#8250;</button>   <!--Right button-->
<div class="background1" style="position: absolute;"></div> <!--StaticBackground-->
<div id="change" class="background2" style="position: absolute;"></div>  <!--Changing Background-->

<?php 
    include("nav.php"); 
    include("common-bottom.php"); 
?>
