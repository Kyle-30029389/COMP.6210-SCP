<?php
    require_once( "db-connect.php" );
    include("common-top.php");
    include("nav.php"); 
    include("common-bottom.php");

    // Get the form data
    $itemnumber  = htmlspecialchars(strip_tags($_POST['itemnumber']));
    $objectclass  = htmlspecialchars(strip_tags($_POST['objectclass']));
    $image = htmlspecialchars(strip_tags($_POST['image']));
    $headerArray = $_POST['header'];
    $contentArray = $_POST['content'];


    $statement = "INSERT INTO scp (id, name, objectclass) 
                    VALUES(NULL, '$itemnumber', '$objectclass')";

    
     if ($link->query($statement) === TRUE) 
     {
         $id = mysqli_insert_id($link);
     }

     $statement = "INSERT INTO scpdata (scpid, header, content) 
                    VALUES('$id', 'Image', '$image')";

    
     $link->query($statement);
  

     for ($i = 0; $i < count($_POST['header']); $i++) 
     {
        $header =htmlspecialchars(strip_tags($headerArray[$i]));
        $content =nl2br(htmlspecialchars(strip_tags(addslashes($contentArray[$i]))));

        $statement = "INSERT INTO scpdata (scpid, header, content) 
                      VALUES(         '$id',               
                                      '$header', 
                                      '$content')";
        mysqli_query($link, $statement);

     }


    print('<div style="width:100%; background-color: gray; text-align:center;" ><h2> Data added</h2>
    <a style="color:white;"  href = "index.php"> Back to Index </a>
    </div>');
   
       
?>
    

