<?php 
require 'functions.php';

$result = mysqli_query($conn, "SELECT * FROM user");
var_dump(mysqli_fetch_assoc($result));