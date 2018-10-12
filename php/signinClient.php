<html>
    
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
    
        if (isset($_POST['password']))
        {
            $password=$_POST['password'];    
        }
        
        // displaying query from the database  
        
        $query = "SELECT * FROM client WHERE username= '".$username."' and password='".$password."'";
        
        $result=mysql_query($query) or die ( mysql_error());
        
        $count = mysql_num_rows($result);
    
        if ($count == 1)    
        
        {
            $_SESSION['username'] = $username;
            echo "<br>Welcome, " . $username . "!!";
            $link2_welcome ='booking.html';
            echo"<br><br><a href='$link2_welcome'><button  id='pagedeveloper'>BOOKING NOW</button></a>";    
        }
            
        else
        {
            echo "Invalid Email or Password";   
        }
    }
    
    ?>
</html>