<?php 
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 
    
    $type = $_GET['type'];

    if($type == "scp"){
        $query = "SELECT* FROM scp WHERE id = '".$_GET['id']."'";
    }

    if($type == "scpdata"){
        $query = "SELECT* FROM scpdata WHERE scpid = '".$_GET['id']."' AND header = '".$_GET['header']."'";
    }

    

    $all_scp = mysqli_query( $link, $query ) 
    or die( mysqli_error( $link ) ); 

    print('
        <form method="post" action="do-update.php?type='.$type.'&id='.$_GET['id'].'&header='.$_GET['header'].'">

        <div class="container">
    ');



if($type == "scp")
{
    while( $scp = mysqli_fetch_assoc( $all_scp ) )
    { 
        print('
            <div class="topcontent">
            <label for="uname"><b>Item Number</b></label>
            <input type="text" value="'.$scp['name'].'" name="itemnumber" required>

            <label for="uname"><b>Object Classification</b></label>

            <select name="objectclass" style="width:200px; height:50px; "selected="selected">
                ');
                

                    $query = "SELECT * FROM scpclass ";
                    $all_classes = mysqli_query( $link, $query ) 
                    or die( mysqli_error( $link ) ); 
                
                
                    while( $objectclass = mysqli_fetch_assoc( $all_classes ) )
                    { 
                        if($objectclass['id'] == $scp['objectclass']){
                            print ('<option value='.$objectclass['id'].' selected>'.$objectclass['classname'].'</option>');
                        }
                        else{
                            print ('<option value='.$objectclass['id'].'>'.$objectclass['classname'].'</option>');
                        }
                    }
        print('
            </select>

            </div>

        ');
    }
}


if($type == "scpdata")
{
    while( $scp = mysqli_fetch_assoc( $all_scp ) )
    { 
        print('
                <div class="formcontent">
                    <label for="header"><b>Header</b></label>
                    <input type="text"  value="'.$scp['header'].'" name="header" required>

                    <label for="content"><b>Content</b></label>
                    <br>
                    <textarea type="text" width="90vw" value="'.$scp['content'].'" name="content" required>'.$scp['content'].'</textarea>
                </div>

        ');
    }
}



print('

        <button class="submit" type="submit">Submit</button>

    </div>
    </form>
');



include("common-bottom.php"); 
    

    
?>