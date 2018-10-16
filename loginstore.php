<?php 
require('info.php');
if(isset($_POST['submit'])){
$email=mysqp escape_string($POST['email']);
$subject=mysqp escape_string($POST['subject']);
$message=mysqp escape_string($POST['message']);
$name=mysqp escape_string($POST['name']);
?>