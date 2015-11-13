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
	<form method="POST" action="/my_first_form.php">
        <p>
            <h3>User Login</h3>
            <label for="username">Username</label>
            <input id="username" name="name" type="text" placeholder="Enter username">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Enter password">
        </p>
        <input type = "hidden" name="user id" value="100">
        <input type= "hidden" name= "account number" value="5226534">
        <p>
            <button type="submit" name="here we go">Login</button>
        </p>
        <p>
            <h3>Compose an Email</h3>
            <label for="email to">Send to: </label>
            <input id="email to" type="text" placeholder="Send email to:">
        </p>
        <p>
            <label for="email from">From: </label>
            <input id="email from" type="text" placeholder="Your email:">
        </p>
        <p>
            <label for="email subject">Subject</label>
            <input id="email subject" type="text" placeholder="Email subject">
        </p>
        <p>
        <p>Checkbox example</p>    
            <input type="checkbox" id="save a copy" name="save a copy" value="yes" checked>
            <label for="save a copy">Do you wish to save a copy?</label>
        </p>
        <p>
            <textarea id="email body" name="email body" rows="5" cols="40" 
            placeholder="Textarea example"></textarea>
        </p>
        <p>
            <button type="send" name="send">Send</button>
        </p>
        <p><h3>Multiple Choice Question #1</h3> 
        <p>Radio Buttons Example</p>    
            <label>
                <input type="radio" name="q1" value="a">
                A</label><br>
            <label>
                <input type="radio" name="q1" value="b">
                B</label><br>
            <label>
                <input type="radio" name="q1" value="c">
                C</label><br>
            <label>
                <input type="radio" name="q1" value="d">
                D</label>
        </p>
        <p><h3>Multiple Choice Question #2</h3>
            <label>
                <input type="radio" name="q2" value="one">
                ONE</label><br>
            <label>
                <input type="radio" name="q2" value="two">
                TWO</label><br>
            <label>
                <input type="radio" name="q2" value="three">
                THREE</label><br>
            <label>
                <input type="radio" name="q2" value="four">
                FOUR</label><br>
        </p>
        <p><h3>Multiple Choice Test #3</h3>
        <p>Multiple Checkbox Example</p>
            <label>
                <input type="checkbox" id="q3-ans1" name="q3[]" value="true">
                True<label for="true"></label><br>
            <label>
                <input type="checkbox" id="q3-ans2" name="q3[]" value="false">
                False<label for="false"></label><br>
            <label>
                <input type="checkbox" id="q3-ans3" name="q3[]" value="neither">
                Neither true or false<label for="neither"></label>
        </p>
        <p><h3>Multiple Choice Test #4</h3>
        <p>Multi-Select List Example</p>    
        <p<label for="q4">Choose 1 - 4: </label></p>
            <select id="q4" name="q4" multiple>
            <option value="1">First</option>
            <option value="2">Second</option>
            <option value="3">Third</option>
            <option value="4">Fourth</option>
            </select>
        </p>
        <p><h3>Select Testing</h3>
            <p>Drop-Down List Example</p>
            <label for="simple">Simply yes or no: </label>
            <select id="simple" name="simple">
            <option value="1" selected>Yes</option>
            <option value="0">No</option>
            </select>
        </p>
        <p>
            <button type="send" name="submit">Submit</button>
        </p>
    </form>
</body>
</html>