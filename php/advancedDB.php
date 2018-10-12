<html>
    
    <head>
        <meta charset="utf-8">
        <title>Advanced Database</title>
    </head>
  
    <body>
    
        <?php
    
        $connect = @mysql_connect('localhost','root','');
    
        if (!$connect)
        {   
            die ("database connection failed" . mysql_error());    
        }
      
        $mydb=mysql_select_db('hotel');

        if (!$mydb)
        {
            die ("can not select database" . mysql_error());
        }

     
        if (isset($_POST['select']))
        {
            $select = $_POST["select"];
            $query = "SELECT username, roomnumber FROM client INNER JOIN rooms ON client.username = rooms. username";
            $result=mysql_query($query) or die ( mysql_error());
            while($row = mysql_fetch_row($result))
            {
                foreach ($row as $key => $value)
                    print("<p>$value</p>");
            }
        }

        ?>
        
      
        <table border="2" id="existingrooms">

            <thead>
                <tr>
                    <th>client Name</th>
                    <th>Room Number</th>
                </tr>
            </thead>
  
            
            <tbody>
    
                <?php
                
                if( mysql_num_rows( $result )==0)
                {
                    echo '<tr><td colspan="3">No Rows Returned</td></tr>';
                }
                
                
                else
                {
                    while( $row = mysql_fetch_row( $result ))
                    {
                        echo "<tr><td>{$row['username']}</td><td>{$row['roomnumber']}</td></tr>\n";
                    }
                }
    
                ?>
  
            </tbody>
        
        </table>

    </body>

</html>
