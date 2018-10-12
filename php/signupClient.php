<html>
    
    <head>
        <meta charset="utf-8">
        <title>Sign up</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
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
    
        if (isset($_POST['username']))
        {
            $username=$_POST['username'];
        }
        
        if (isset($_POST['email']))
        {
            $email=$_POST['email'];
        }
        
        if (isset($_POST['password']))
        {
            $password=$_POST['password'];
        }
        

        // inserting input in the database   

        $query = "INSERT INTO client (username, email, password) VALUES ('$username','$email' ,'$password')";

        // end of the session and message in case of success of the operation    
    
        $result=mysql_query($query) or die (mysql_error()); 
    
        echo "Successfully, Your Data is registered" ;   

    ?>
        
                <article class="article3">
        
            <div class="developerSignupButton">
    
                <div class="Developercolumn1">
                    <div class="Developerbtn-group">
                        <button id="pageDeveloperSignup" ><a href="signinClient.html">Sign in</a></button>      
                    </div>
                </div>
            
            </div> 
       
        </article>
        
    </body>
</html>