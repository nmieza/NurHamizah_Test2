<!DOCTYPE html>
<html>
<title>Virtual Run Event</title>
<style>

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #cc4400;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #ffddcc;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
h2 {text-align: center;}

</style>
<body>


<br><br><h2>VIRTUAL RUN REGISTRATION</h2></br>
<?php     echo "<button onclick=\"location.href='index.html'\" type=\"button\">MAIN MENU</button>"; ?>

<div>
  <form action="registration_handle.php" method="POST" enctype="multipart/form-data">
    
  
     
    <label for="Name">Name</label>
    <input type="text" id="Name" name="Name" placeholder="Enter Your Full Name..">

    <label for="Age">Age</label>
    <input type="text" id="Age" name="Age" placeholder="Enter Your Age..">

    <label for="NRIC">NRIC</label>
    <input type="text" id="NRIC" name="NRIC" placeholder="Enter Your NRIC..">

    <label for="Address">Address</label>
    <input type="text" id="Address" name="Address" placeholder="Enter Your Current Address..">

    <label for="Contact">Contact</label>
    <input type="text" id="Contact" name="Contact" placeholder="Enter Your Contact Number..">

    <label for="Email">Email</label>
    <input type="text" id="Email" name="Email" placeholder="Enter Your Email.."><br><br>

    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>