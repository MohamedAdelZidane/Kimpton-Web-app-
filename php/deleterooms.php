<html>
    <!--//header of the page-->
    <header>
        <meta charset="utf-8">
        <title>Updated Deleted Rooms</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </header>

    <body>
    
        <?php
// taking desicion and deleting the rooms and reporting errors
        if ( isset($_POST["hotel"]))        
            $hotel = $_POST["hotel"];

        if ( !( $hotel = @mysql_connect( "localhost", "root", "" )))     
            die( "<p>Could not connect to database</p>" );
   
        if ( !mysql_select_db( "hotel", $hotel ))
            die( "<p>Could not open URL database</p>" );
        
        $roomnumber=$_POST['roomnumber'];

        $q="DELETE FROM `rooms` WHERE roomnumber = '$roomnumber'";

        $r=mysql_query($q);

        if (!$r)
            die("query error");    

        ?>
    <!--    // header-->
        <h3>Updated Deleted Rooms</h3><br>
<!--//table-->
        <table border = "1" id="updateddeletedrooms">
    
            <tr>
                <th>Room View</th>
                <th>Room Number</th>
            </tr>
         
            <?php
        // error message in case of not executing query
            if ( !( $result = mysql_query( "SELECT roomview, roomnumber FROM rooms", $hotel )))
            {
                print( "<p>Could not execute query!</p>" );
                die( mysql_error() );    
            }
         
            mysql_close( $hotel );
   // while loop
            while ( $row = mysql_fetch_row( $result ))
                print( "<tr><td>" . $row[ 0 ] . "</td><td>" . $row[ 1 ] . "</td></tr>" );     
        
            ?>
      
        </table>
        <br>

        <form method="post" action="uppdate.php">
            <input type="submit" value="BACK" id="backUpdatedDB">
        </form>
    
    </body>
    
</html>

