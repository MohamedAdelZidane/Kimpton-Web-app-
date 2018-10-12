<html>
    <head>
        <title>Contact Us</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </head>
    
    <body>

        <?php

        //start
    
        $connect =@ mysql_connect('localhost','root','');

        // error alarm
    
        if (!$connect)
        {
            die ("database connection failed" . mysql_error());
        }

        // Sets the current active database on the server

        $mydb=mysql_select_db('hotel');

        // appear if there is an error in selecting database
    
        if (!$mydb)
        {
            die ("can not seelct database" . mysql_error());
        }

        //error alarm if there is an error
     
        if (isset($_POST['firstname']))
        {
            $firstname=$_POST['firstname'];
        }
        
        if (isset($_POST['lastname']))
        {
            $lastname=$_POST['lastname'];
        }
        
        if (isset($_POST['email']))
        {
            $email=$_POST['email'];
        }
        
        if (isset($_POST['comments']))
        {
            $comments=$_POST['comments'];
        }

        //inserting input in the database   
        
        $query = "INSERT INTO contactUs (firstname, lastname, email, comments)
        
        VALUES ('$firstname','$lastname','$email','$comments')";


        //end of session and message in case of success of the operation
        
        $result=mysql_query($query) or die (mysql_error());    
        
        echo "Your Request is Processing, We Will Contact You as soon as Possible" ;   
    
        ?>
    
    </body>    
        
</html>