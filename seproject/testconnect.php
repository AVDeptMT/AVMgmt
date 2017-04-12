<?php
$con=mysqli_connect("cemserver.fsa.mtsu.edu:80","root","Mtsu2017!","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
