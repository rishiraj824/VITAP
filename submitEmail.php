<?php
  // Connecting to the MySQL server
  $host="myHost";
  $user_name="myUsername";
  $pwd="myPassword";
  $database_name="myDatabase"; //assuming you created this
  $db=mysql_connect($host, $user_name, $pwd);
  if (mysql_error() > "") print mysql_error() . "<br>";
  mysql_select_db($database_name, $db);
  if (mysql_error() > "") print mysql_error() . "<br>";
  // Storing form values into PHP variables
  $email = $_POST["email"];
  // Inserting these values into the MySQL table
  // we created above
  $query = "insert into vitap_email_list (email) values ('" . $email . "')";
  $result = mysql_query($query);
  // mysql_query() is a PHP function for executing
  // MySQL queries
  echo "<p>Thank you for entering an email!</p>";
?>