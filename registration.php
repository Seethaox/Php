

<html>
    <head>
        <title> HTML Form </title>
       

       <link rel = "stylesheet" type = "text/css" href = "style.css" />
<!--         <script src="jquery-3.2.1.min.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="jq.js"></script>


    </head>
    <body>
        <form action="register_action.php"  method="post" enctype="multipart/form-data">
            <br><br>
            <center><h1> USER REGISTRATION FORM </h1></center><br><br>
            <div id ="container">
                <table align="center" height="500px" width="400px">
                    
                        <tr><td>Name: </td><td><input type="text" id="name" name="name"  placeholder="Enter Your Name..." required><span class="hidden" id="name_error"> </span></td></tr> 
                        <tr><td>Password: </td><td><input type="password" id="pwd" name="pwd"  placeholder="Enter a Password..." required><span class="hidden" id="pwd_error"></span></td></tr>
                        <tr><td>Email: </td><td><input type="text" id="mail" name="email" placeholder="Enter Your e-mail address..." required><span class="hidden" id="mail_error"> </span></td></tr>
                        <tr><td>Contact no: </td><td><input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile Number..." required><span class="hidden" id="mobile_error"> </span></td></tr>

                        <tr><td>Select File: </td><td><input type="file" name="file_img"></td></tr>
                        <tr><td> Gender : </td><td><input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female<span class="hidden" id="gender_error"> </span></td></tr>
                      

                       <tr><td>Date of Birth </td><td><input type="date" id="date" name="date"><span class="hidden" id="dob_error"> </span></td></tr>

                        <tr><td> Address:</td><td> <textarea id="address" rows="5" name="address" placeholder="Enter Your Address!!!" required></textarea></td>
                        <tr><td></td><td><span class="hidden" id="address_error"> </span>
                                <input align="right" type="submit"  name="submit" class="btn" value="Submit"></td></tr>
                </table>
            </div>
        </form>

    </body>
</html>



