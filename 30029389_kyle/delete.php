<?php 
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 
    
    $type = $_GET['type'];

    

    if($type == "scp"){
        $query = "DELETE FROM scp WHERE id = '".$_GET['id']."'";
    }

    if($type == "scpdata"){
        $query = "DELETE FROM scpdata WHERE scpid = '".$_GET['id']."' AND header = '".$_GET['header']."'";
    }

    $link->query($query);
    print('<div style="width:100%; background-color: gray; text-align:center;" ><h2> Data Deleted</h2>
    <a style="color:white;"  href = "index.php"> Back to Index </a>
    </div>');
include("common-bottom.php"); 
    

    
?>