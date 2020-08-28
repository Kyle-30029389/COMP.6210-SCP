<?php 
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 
    
    $type = $_GET['type'];

    

    $type = $_GET['type'];

    if($type == "scp"){
        $query = "SELECT* FROM scp WHERE id = '".$_GET['id']."'";
    }

    if($type == "scpdata"){
        $query = "SELECT* FROM scpdata WHERE scpid = '".$_GET['id']."' AND header = '".$_GET['header']."'";
    }

    $all_scp = mysqli_query( $link, $query ) ;

    
    print('
        <form method="post" action="delete.php?type='.$type.'&id='.$_GET['id'].'&header='.$_GET['header'].'">
            <div class="deleteback">
                <label class="deletelabel" style="text-align:center; width:100%;" for="header"><b>Are you sure you want to delete</b></label>
                <div class="deletediv">
                    <button class="delete" type="submit">Yes</button>
                    <input style="float-right" class="delete back" type="button" value="No" onclick="history.back()">
                </div>
            </div>
        </form>
');

include("common-bottom.php"); 
    

    
?>