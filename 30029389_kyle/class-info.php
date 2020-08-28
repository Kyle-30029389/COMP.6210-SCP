<?php
    require_once( 'db-connect.php' );
    include("common-top.php");
    include("nav.php"); 
    include("background.php"); 

    $id = $_GET['id'];


    $query = "SELECT * FROM scpclass Where id = $id ";
            $all_posts = mysqli_query( $link, $query ) 
            or die( mysqli_error( $link ) ); 
        
        
            while( $blog_post = mysqli_fetch_assoc( $all_posts ) )
            { 
                
                print('
                <button type="button" class="collapsible">'.$blog_post['classname'].'</button>
                <div class="content">'.$blog_post['classdescription'].'</div>
                ');
                
            }
    include("common-bottom.php"); 
?>