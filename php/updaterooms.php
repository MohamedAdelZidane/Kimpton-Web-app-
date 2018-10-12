<html>

    <header>
        <title>Updated Database
        </title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </header>
    
    <body>
    
        <?php


        if ( isset($_POST["hotel"]) )    
            $hotel = $_POST["hotel"];
    // error messages
        if ( !( $hotel = @mysql_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
        
        if ( !mysql_select_db( "hotel", $hotel ) )
            die( "<p>Could not open URL database</p>" );

        if (isset($_POST['roomnumber']))
        {
            $roomnumber=$_POST['roomnumber'];
            if(isset($_POST['roomview'])!= null){
                $query_update = "UPDATE rooms SET roomview = '". $_POST['roomview'] ."' WHERE roomnumber = '" . $roomnumber . "'";
                $result=mysql_query($query_update);         
            }  
        }

        ?>

        <p><br><b>UPDATED DATABASE</b></p><br>
<!--// updating database table-->
        <table border = "2" id="updatedDB">
            <tr>
                <th>Room View</th>
                <th>Room Number</th>
            </tr>
    
            <?php
    // in case of error
            if ( !( $result = mysql_query( "SELECT roomview, roomnumber FROM rooms", $hotel ) ) )
            {
                print( "<p>Could not execute query!</p>" );
                die( mysql_error() );
            }
    
            mysql_close( $hotel );
    // while loop
            while ( $row = mysql_fetch_row( $result ) )
                print( "<tr><td>" . $row[ 0 ] . "</td><td>" . $row[ 1 ] . "</td></tr>" );
            ?>
    

        </table><br>
<!--// Post methode-->
        <form method="post" action="uppdate.php">
            <input type="submit" value="BACK" id="backUpdatedDB">
        </form>

    </body>

</html>

