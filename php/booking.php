<html>
    
    <head>
        <title>Booking</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="CSS.css" >
    </head>

    <body>
    
        <?php
    
        // start
    
        $connect =@ mysql_connect('localhost','root','');
    
        // error alarm
    
        if (!$connect)
        {   
            die ("database connection failed" . mysql_error());        
        }

        // Sets the current active database on the serve
    
        $mydb=mysql_select_db('hotel');
        
        // appear if there is an error in selecting database
        if (!$mydb)
        {
            die ("can not select database" . mysql_error()); 
        }
 
        // error alarm if the is an error
    
        if (isset($_POST['Number_of_Adult']))
        {
            $Number_of_Adult=$_POST['Number_of_Adult'];    
        }
        
        if (isset($_POST['Number_of_Child']))
        {
            $Number_of_Child=$_POST['Number_of_Child'];    
        }
        
        if (isset($_POST['Duration']))
        {
            $Duration=$_POST['Duration'];
        }
    
        if (isset($_POST['Number_of_Rooms']))
        {
            $Number_of_Rooms=$_POST['Number_of_Rooms'];
        }
    
        // inserting input in the database
    
        $query = "INSERT INTO booking (numberofAdult, numberofChild, duration, numberofRooms) VALUES 
        ('$Number_of_Adult','$Number_of_Child','$Duration','$Number_of_Rooms')";

        // end of the session and message in case of success of the operation
        $result=mysql_query($query) or die (mysql_error());    
    
    
        echo "<h1>Successfully Registered, We wish you happy vacation</h1> " ;   
    
        ?>
        
        
    </body>
    
</html>