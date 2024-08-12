<?php
if($_SERVER['REQUEST_METHOD']!='POST'){
    header('location:index.php');//for redirecting to page 
}
header('location:index.php');
