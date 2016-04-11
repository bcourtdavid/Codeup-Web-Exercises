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
    <!-- This exercise pracitces the use of some of the different types of form inputs that are available, 
         and how forms are submitted, we can start to talk about individual input types. -->
    <h2>User Login</h2>
	<form method="POST" action="/my_first_form.php">
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter Username">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" type="hidden" placeholder="Enter Password">
    </p>

    <h2>Compose an Email</h2>
    <form method="POST" action="/my_first_form.php">
    <p>
        <label for="recipient">To:</label>
        <input id="recipient" name="recipient" type="text" placeholder="Send to">
    </p>
    <p>
        <label for="sender">From:</label>
        <input id="sender" name="sender" type="text" placeholder="Sent from">
    </p>
    <p>
        <label for="subject">Subject:</label>
        <input id="subject" name="subject" type="text">
    </p>
    <p>
        <textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea>
    </p>
    <p>
        <button type="send">Send</button>
    </p>
</form>
</body>
</html>