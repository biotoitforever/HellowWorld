<?php
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters  and white space allowed";
        } 
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
    
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
    if (!$nameErr and !$emailErr and !$passwordErr) {
        echo "<h2>Your login/registration is successful!</h2>";
        
        
    }    

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo <<<_END
<html>
<head>
<title>Registration Form</title>
<style>
body {width: 50%; margin: 0 auto}
.error {color: red}
p {color: red}
</style>
</head>
<body>
<div>
<h2>Please login/register</h2>
<p>* required field</p>
<form method="post" action="registration.php"><pre>
    Name: <input type="text" name="name" value=$name><span class="error"> * $nameErr</span><br>
  E-mail: <input type="text" name="email" value=$email><span class="error"> * $emailErr</span><br>
Password: <input type="text" name="password" value=$password><span class="error"> * $passwordErr</span><br>
comment: <textarea name="comment" rows="5" cols="40">$comment</textarea><br>
          <input type="submit" name="submit" value="Submit" />
</pre>
</form>
</div>
</body>
</html>
_END;


echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
?>