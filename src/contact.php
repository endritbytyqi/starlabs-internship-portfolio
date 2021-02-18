<?php 
require_once('dbcon.php');
if((isset($_POST['name']) && $_POST['name'] !='') 
&& (isset($_POST['email']) && $_POST['email'] !=''))
{   
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$sql = "INSERT INTO contactform (name, email, message) VALUES ('".$name."', '".$email."', '".$message."')";



$result = $conn->query($sql);

if ($result){
   echo "<script>alert('Mesazhi u dergua me sukses!');
   window.location.href = 'index.php';
   </script>";
}
else{
    die('error [' . $conn->error . ']');
}
}

?>