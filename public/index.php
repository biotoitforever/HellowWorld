<?php 
  //configuration
  require("../includes/config.php");
  
  // if the user hasn't logged in yet, render the log in form page
  if (empty($_SESSION["id"]))
  	render("login_form.php");
  
  // else if the user has logged in and the cookie exists (is this the right
  // way to say?), then render the welcome home page
  else
  	render("welcome.php");  //////////////////this needs further modification
    // I want to be able to show user's name, so maybe we should render
    // welcome.php in login.php
?>
