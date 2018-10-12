<html>
  
    <head>
        <title>Sign up</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </head>

  
    <body>
        
        <?php
        // connect to the host
        $connect =@ mysql_connect('localhost','root','');
        // error messages
        if (!$connect)
        {   
            die ("database connection failed" . mysql_error());    
        }
    
        $mydb=mysql_select_db('hotel');
        
        if (!$mydb)        
        {
            die ("can not select database" . mysql_error()); 
        }
        
        if (isset($_POST['username']))
        {
            $username=$_POST['username'];
        }
        
        if (isset($_POST['email']))
        {
            $email=$_POST['email'];
        }
        
        if (isset($_POST['password_confirmation']))
        {
            $password_confirmation=$_POST['password_confirmation'];
        }
        // inserting data
        $query = "INSERT INTO developerform (userName, email, password) VALUES ('$username','$email','$password_confirmation')";

        $result=mysql_query($query) or die (mysql_error());  

        echo "<br>Your Data is Successfully Registered!!";   
        
        ?>
        
        <article class="article3">
        <!--// sing ui button class-->
            <div class="developerSignupButton">
    
                <div class="Developercolumn1">
                    <div class="Developerbtn-group">
                        <button id="pageDeveloperSignup" ><a href="Signinform.html">Sign in</a></button>      
                    </div>
                </div>
            
            </div> 
       
        </article>
    
    </body>

</html>

