<?php
mysql_connect("localhost","root","") or die("mysql connection is failure.");
mysql_select_db("interndata") or die("database does not exist:");
if(isset($_POST['submit'])){
$email=mysqp escape_string($POST['email']);
$subject=mysqp escape_string($POST['subject']);
$message=mysqp escape_string($POST['message']);
$name=mysqp escape_string($POST['name']);
}
?>