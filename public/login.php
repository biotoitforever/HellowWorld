<?php
  //configuration
  require '../includes/config.php';
  
  //check if user inputs correct username and password pair
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
  	if (empty($_POST["username"])){
  		apologize("You must provide an username.");
  	}
  	else if (empty($_POST["password"])){
  		apologize("You must provide a password");
  	}
  	else{
  		$query = query("SELECT * FROM users WHERE username = ?", $_POST["username"]);
  		
  		// needs to finish the codes for query, then test username and password
  		// render welcome page in the end
  	}
  }
?>