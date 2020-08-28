<form method="post" action="do-add-entry.php">

        <div class="container">
            <div class="topcontent">
                <label for="uname"><b>Item Number</b></label>
                <input type="text" placeholder="Enter Item Number" name="itemnumber" required>

                <label for="uname"><b>Object Classification</b></label>

                <select id="cars" name="objectclass" style="width:200px; height:50px;">
                    <?php
                        require_once( 'db-connect.php' );
                        $query = "SELECT * FROM scpclass ";
                        $all_classes = mysqli_query( $link, $query ) 
                        or die( mysqli_error( $link ) ); 
                    
                    
                        while( $objectclass = mysqli_fetch_assoc( $all_classes ) )
                        { 
                            
                            print ('<option value='.$objectclass['id'].'>'.$objectclass['classname'].'</option>');
                            
                        }
                    ?>
                </select>

                <br><label for="uname"><b>Image URL</b></label>
                <input type="text" placeholder="Enter Image URL" name="image">

            </div>

            <div class="formcontent">
                <h1>Content 1</h1>
                <label for="header"><b>Header</b></label>
                <input type="text" placeholder="Enter Header" name="header[]" required></textarea>

                <label for="content"><b>Content</b></label>
                <br>
                <textarea type="text" width="90vw" placeholder="Enter Content" name="content[]" required></textarea>
            </div>
                <div class="extracontent" id = "extracontent">
            </div>


            <button class="submit" type="button" onclick="addCode()">Add Content</button>

            <button class="submit" type="submit" style="float:right;">Submit</button>

        </div>



</form>






