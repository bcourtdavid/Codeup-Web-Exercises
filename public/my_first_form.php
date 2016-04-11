<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
	<title>My First HTML Form</title>
    <meta charset = "utf-8">
</head>
<body>	
    <!-- This exercise pracitces the use of form attributes and identifies why the use of 
         a button tag is preferrable over an "input type = 'submit'" -->
	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter Username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter Password">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
</form>
</body>
</html>