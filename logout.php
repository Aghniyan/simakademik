<?php
require('connection.php');
session_start();
session_unset();
session_destroy();
header('Location:'.base_url());
?>