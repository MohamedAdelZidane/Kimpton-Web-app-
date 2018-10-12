
<html>
  <head>
    <title>Form Example</title>
  </head>

  <body>
    <form method="post" action="form2.php">
      <h2>Studnet Information</h2>
      <p><label>First name: <input type="text" name="fname"></label></p>
      <p><label>Last name: <input type="text" name="lname"></label></p>
      <p><label>Email: <input type="text" name="email"></label></p>
      <p><label>Phone: <input type="text" name="phone"></label></p>

      <h2>Major</h2>
      <p>What is your major?</p>
      <p>
      <input type = "radio" name = "major" value ="SE"> Software Engineering
      <input type = "radio" name = "major" value ="CS"> Computer Science
      <input type = "radio" name = "major" value = "IS"> Information Systems
      <input type = "radio" name = "major" value = "CN"> Computer Networks
      </p>

      <p><input type="submit" name="submit" value="Register"></p>
    </form>
  </body>
</html>
