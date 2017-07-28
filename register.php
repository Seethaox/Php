<?php
session_start();
if (isset($_SESSION['id'])) {
    header('location: login_data.php');
}
?>
<html>
    <head>
        <title> HTML Form </title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="jq.js"></script>

    </head>
    <body>
        <div id="header">
            USER REGISTRATION FORM </h1></div>
    <div id ="container">

        <form action="register_action.php"  method="post" enctype="multipart/form-data">
            <label>  Name: </label>
            <input type="text" id="name" name="name"  placeholder="Enter Your Name..."> <span class="hidden" id="name_error"></span><br>
            <label>Password:</label> 
            <input type="password" id="pwd" name="pwd"  placeholder="Enter Your Name..."><span class="hidden" id="pwd_error"></span><br>
            <label> Email:</label> 
            <input type="email" id="mail" name="email" placeholder="Enter Your e-mail address..." required><span class="hidden" id="mail_error"></span><br>
            <label>Contact No:</label> 
            <input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile Number..."><span class="hidden" id="mobile_error"></span><br>


            <label>Gender : </label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female <span class="hidden" id="gender_error"></span> <br>


            <label> Select File : </label>
            <input type="file" name="file_img"><span class="hidden" id="file_error"></span> <br>
            <label>Date of Birth:</label> 
            <input type="date" id="date" name="date"><span class="hidden" id="dob_error"></span><br>

            <label>Address:</label> <textarea id="address" rows="5" name='address' placeholder="Enter your Address!!!"></textarea><span class="hidden" id="address_error"></span> <br>


            <input align="right" type="submit"  name="submit" class="btn" value="Submit">

            </div>
        </form>

</body>
</html>