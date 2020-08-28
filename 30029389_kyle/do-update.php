<?php 
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 
    
    
    $type = $_GET['type'];
    $id = $_GET['id'];
    if($type == "scp"){
        $itemnumber = htmlspecialchars(strip_tags(addslashes($_POST['itemnumber'])));
        $objectclass = htmlspecialchars(strip_tags(addslashes($_POST['objectclass'])));
        $statement = "UPDATE scp SET name = '".$itemnumber."' , objectclass = '".$objectclass."' WHERE id = '".$id."'";
        
        mysqli_query($link, $statement);
    }

    if($type == "scpdata"){
        $header = htmlspecialchars(strip_tags(addslashes($_POST['header'])));
        $content = nl2br(htmlspecialchars(strip_tags(addslashes($_POST['content']))));
        $statement = "UPDATE scpdata SET header = '".$header."' , content = '".$content."' WHERE scpid = '".$id."' AND header = '".$_GET['header']."'";

        mysqli_query($link, $statement);
    }


    print('<div style="width:100%; background-color: gray; text-align:center;" ><h2>Data Updated</h2>
    <a style="color:white;"  href = "index.php"> Back to Index </a>
    </div>');
    include("common-bottom.php"); 
    

    
?>