<?php 
  /*
   *render templates, passing in values (values need to be array)
   */
  function render($template, $values = []){
  	// if template exists, render it
  	if (file_exists("../templates/$template"))
  	{
  		extract($values);
  		
  		require("../templates/header.php");
  		require("../templates/$template");
  		require("../templates/footer.php");
  	}
  }
  
  /*
   * render an error message if user did something wrong
   */
  function apologize($message){
  	render("apology.php", ["message" => $message]);
  	exit;
  }
  
  /*
   * connect to the database and executes sql statments
   * return query results
   */
  function query(){
  	
  }
?>