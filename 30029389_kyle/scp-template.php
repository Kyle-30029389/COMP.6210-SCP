<?php 
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 
    $end = 0;
    
    $query = "SELECT `scp`.*, `scpclass`.*, `scpdata`.*
    FROM `scp` 
        LEFT JOIN `scpclass` ON `scp`.`objectclass` = `scpclass`.`id` 
        LEFT JOIN `scpdata` ON `scpdata`.`scpid` = `scp`.`id` WHERE scp.id = '".$_GET['id']."' ORDER by scpdata.time ASC";

    $all_scp = mysqli_query( $link, $query ) 
    or die( mysqli_error( $link ) ); 


while( $scp = mysqli_fetch_assoc( $all_scp ) )
{ 

    if ($end == 0)
    {
        $end = 1;
        print('
        <div class="pagecontent">
                <div class="header">
                <a class="button" href="update.php?id='.$_GET['id'].'&type=scp">Edit</a>
                <a class="button" href="delete-form.php?id='.$_GET['id'].'&type=scp">Delete</a>
                    <h1><b>Item #: </b>'.$scp['name'].'</h1>
                    <h2><b>Object Class: </b> <a href ="class-info.php?id='.$scp['id'].'">'.$scp['classname'].' </a></h2>
                    
                </div>
        ');
    }

        

        if($scp['header'] != 'Image'){
            print('
            
            <button type="button" class="collapsible">'.$scp['header'].'
                <br>
                <a class="button" href="update.php?id='.$_GET['id'].'&header='.$scp['header'].'&type=scpdata">Edit</a>
                <a class="button" href="delete-form.php?id='.$_GET['id'].'&header='.$scp['header'].'&type=scpdata">Delete</a>

            </button>
            <div class="content">'.nl2br($scp['content']).'</div>
            ');
        }
        else{
            print('
            
            <button type="button" class="collapsible">
                <br>
                <a class="button" href="update.php?id='.$_GET['id'].'&header='.$scp['header'].'&type=scpdata">Edit</a>
                <a class="button" href="delete-form.php?id='.$_GET['id'].'&header='.$scp['header'].'&type=scpdata">Delete</a>

            </button>
            <div class="content"><img src="'.$scp['content'].'"></div>
            ');
        }

}
include("common-bottom.php"); 
    

    
?>