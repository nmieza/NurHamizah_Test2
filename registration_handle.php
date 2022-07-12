<!DOCTYPE html>
<html>
<title>Virtual Run Event</title>
<style>

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
h2 {text-align: center;}
h1 {text-align: center;}

</style>
<body>


<h2>VIRTUAL RUN REGISTRATION DETAIL</h2>

<?php 
error_reporting(0);
include 'db_connect.php';
session_start();

# Check if sender fileds are empty
if(empty($_POST['Name']) && empty($_POST['Age']) && empty($_POST['NRIC']) && empty($_POST['Address']) && empty($_POST['Contact'])
    && empty($_POST['Email'])){
    # If the fields are empty, display a message to the user
    echo " <br/> Please fill in the fields";

# Process the form data if the input fields are not empty
}else{
    # insert into sql
    $sql = "INSERT into registration (Name, Age, NRIC, Address, Contact, Email) 
    VALUES ( '$_POST[Name]', '$_POST[Age]', '$_POST[NRIC]', '$_POST[Address]', '$_POST[Contact]', '$_POST[Email]')";
}

if (!mysqli_query($conn, $sql)) {
    die('Error: '. $conn->error);
}
else{
    $Name= $_POST['Name'];
    $Age= $_POST['Age'];
    $NRIC= $_POST['NRIC'];
    $Address= $_POST['Address'];
    $Contact= $_POST['Contact'];
    $Email= $_POST['Email'];


    echo "<h1>Participant information</h1><br><br>";
    echo ('<h2>'. $Name. '</h2>');
    echo ('<h2>'. $Age. '</h2>');
    echo ('<h2>'. $NRIC. '</h2>');
    echo ('<h2>'. $Address. '</h2>');
    echo ('<h2>'. $Contact. '</h2>');
    echo ('<h2>'. $Email. '</h2>');
   
    
    echo "<button onclick=\"location.href='index.html'\" type=\"button\">HOME</button>";

}
?>