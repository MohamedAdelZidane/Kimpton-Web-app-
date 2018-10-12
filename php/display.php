<html>
<!--//head-->
    <head>
        <meta charset="utf-8">
        <title>
            Existing Rooms</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </head>
    
    <body>
        <!--//header-->
        <h3>Existing Rooms</h3>
    
        <br>
        <?php
    // connect to host
        $connect =@ mysql_connect('localhost','root','');
        // taking descion if there is an error show a message
        if (!$connect)
        {   
            die ("database connection failed" . mysql_error());
        }
            
        $mydb=mysql_select_db('hotel');
        // taking descion if there is an error show a message

        if (!$mydb)
        {
            die ("can not seelct database" . mysql_error());        
        }
        
        ?>
        
        <?php 
            // 
        $query_display = "SELECT * FROM rooms";
        
        $result=mysql_query($query_display) or die (mysql_error());   
        
        ?>
    <!--    // existing rooms table-->
        <table border="2" id="existingrooms">

            <thead>
                <tr>
                    <th>Room View</th>
                    <th>Room Number</th>
                </tr>
            </thead>
  
            <tbody>
    
                <?php
    // making decision 
                if( mysql_num_rows( $result )==0 )
                {
                    echo '<tr><td colspan="3">No Rows Returned</td></tr>';
                }
                
                else
                {
                    while( $row = mysql_fetch_assoc( $result ) )
                    {
                        echo "<tr><td>{$row['roomview']}</td><td>{$row['roomnumber']}</td></tr>\n";
                    }
                }
    
                ?>
  
            </tbody>

        </table>
        <br><br>
        <!--// post method-->
        <form method="post" action="developerpage.php">
            <input type="submit" value="BACK" id="backUpdatedDB">
        </form>
    
        <br>  

    </body>

</html>

