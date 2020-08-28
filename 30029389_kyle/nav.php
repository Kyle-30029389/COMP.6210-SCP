<div class="topnav">
        <div class="Navbar">      
            <img class="logo" src="images/Logo.svg" alt="Logo">
            <div class="title" >SCP Foundation</div>
        </div>  
        
        <div id="myLinks">
            <a href="index.php">Home</a>
            <a href="new-entry.php">New Entry</a>
            <?php
            require_once( 'db-connect.php' );
            $query = "SELECT * FROM scp ORDER BY name ASC";
            $all_posts = mysqli_query( $link, $query ) 
            or die( mysqli_error( $link ) ); 
        
        
            while( $blog_post = mysqli_fetch_assoc( $all_posts ) )
            { 
                
                print ('<a href="scp-template.php?id='.$blog_post['id'].'">'.$blog_post['name'].'</a>');
                
            }
            ?>
        </div>
        
        <a class="icon" onclick="myFunction()"> <!--Display DropDown-->
            <i class="fa fa-bars"></i>
        </a>
        
        
    </div>