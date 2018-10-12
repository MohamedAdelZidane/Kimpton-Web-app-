<html>

    <head>
        <meta charset="utf-8">
        <title>Database Update</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css">
    </head>
    
    
    <body>
    
        <?php

        if ( isset($_POST["hotel"]) )    
            $hotel = $_POST["hotel"];
// error messages in case in connection problems
        if ( !( $hotel = @mysql_connect( "localhost", "root", "" ) ) )
            die( "<p>Could not connect to database</p>" );
        
        if ( !mysql_select_db( "hotel", $hotel ) )
            die( "<p>Could not open hotel database</p>" );
   // Rooms details
        if ( isset($_POST["roomview"])  and isset($_POST["roomnumber"])){
            $roomview = $_POST["roomview"];
            $roomnumber = $_POST["roomnumber"];
            $query = "INSERT INTO rooms ( roomview, roomnumber )VALUES ( '$roomview', '$roomnumber' )";
            $result = mysql_query( $query, $hotel );    
        }

        ?>
    
        <h1>Database Updated</h1><br>
<!--    // Table display-->
        <table border = "2" id="tabledisplay">
        
            <tr>
                <th>Room View</th>
                <th>Room Number</th>
            </tr>
         
            <?php
            // error in executing query
            if ( !( $result = mysql_query( "SELECT roomview, roomnumber FROM rooms", $hotel ) ) )
            {
                print( "<p>Could not execute query!</p>" );
                die( mysql_error() );
            }
            
            mysql_close( $hotel );
   
            while ( $row = mysql_fetch_row( $result ) )
                print( "<tr><td>" . $row[ 0 ] . "</td><td>" . $row[ 1 ] . "</td></tr>" );
            ?>
            
        </table><br>
        
        <b id="operations">Operations on Data<hr id="operationsDB"></b><br><br>
<!--// selecting the room-->
        <section class="DBOperations">
            <div class="DBOperations2">
                <div class="DBOperations3">
                    <form action="updaterooms.php" method="POST">
                        <label>Select a Room Number to Update: <input type="number" name="roomnumber"  required></label> <br><br>
                        <label>Room View Update: <input type="text" name="roomview" required></label> <br><br>
                        <input type="submit" value="UPDATE" id="updateDB"> <br><br>
                    </form>
                </div>
    <!--            // Pos tmethode to delete rooms-->
                <div class="DBOperations3">
                    <form action="deleterooms.php" method = "POST">
                        <label>Select a Room Number to Delete: </label><input type="number" name="roomnumber" required><br><br>
                        <input type="submit" value="DELETE" id="deleteDB"><br><br>
                    </form>
                </div>
            
            </div>
        
        </section>
       
    </body>

</html>
