<html>

    <header>
        <meta charset="utf-8">
        <title>Developer Page</title>
        <link rel="icon" href="epicLogo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="webStyle.css" >
    </header>
    
    <body>
    
        <br><br>
        <!--// paragraph-->
        <p>
            As Your Position Which is <em><b>Developer</b></em>, you can <em><b>update, insert and delete rooms</b></em>.<br><br>    
        
        </p>
        
        <p> Enter The Room View &amp; its Number To Make Operations On it. </p><br>

        <form action = "uppdate.php" method = "POST">
            <label>Room View<br><input type ="text" name="roomview" placeholder="Sea, Pool, Garden..." formvalidate autofocus required></label>
            <br><br>
            <label>Room Number<br><input type = "number" name = "roomnumber" formvalidate required></label>
            <br><br>
 <!--inserting room-->
            <input type = "submit" value = "ADD THIS ROOM (INSERT)" id="insert">        
        </form>
        
        <br><br>
        <!--// existing rooms button--> 
        <button id="displayButton"><a href="display.php">EXISTING ROOMS</a></button>
    
    </body>

</html>
