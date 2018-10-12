<html>
  
    <head>
        <meta charset="utf-8">
        <title>Log in</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </head>

    <body>
        
        <?php
        
        $connect =@ mysql_connect('localhost','root','');
        // error messages
        if (!$connect)
        {   
            die ("database connection failed" . mysql_error());    
        }
        
        $mydb=mysql_select_db('hotel');
        
        if (!$mydb)
        {
            die ("can not seelct database" . mysql_error());    
        }
        // password acceptane
        if (isset($_POST['username']))
        {
        
            $username=$_POST['username'];
        
            if (isset($_POST['password_confirmation']))
            {
                $password_confirmation=$_POST['password_confirmation'];
            }
        // selecting Data
            $query = "SELECT * FROM developerform WHERE userName= '".$username."' and password='".$password_confirmation."'";
    
            $result=mysql_query($query) or die ( mysql_error());
            
            $count = mysql_num_rows($result);
    // welcoming message
            if ($count == 1)    
            {
                $_SESSION['username'] = $username;   
                echo "<br>Welcome, " . $username . "!!";
                $link_welcome ='developerpage.php';
                echo"<br><br><a href='$link_welcome'><button  id='pagedeveloper'>Developer Page</button></a>";
            }
            
// invalid password message
            else
            {
                echo "Invalid Username or Password";
            }
    
        }
        
        ?>
        
    </body>

</html>

