<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Example</title>
  </head>
  <body> 
    <p>First name: <?php print($_POST["fname"] ); ?></p>
    <p>Last name: <?php print($_POST["lname"] ); ?></p>
    <p>Email: <?php print($_POST["email"] ); ?></p>
    <p>Phone: <?php print($_POST["phone"] ); ?></p>
    <p>Major: <?php print($_POST["major"] ); ?></p>
  </body>
</html>
