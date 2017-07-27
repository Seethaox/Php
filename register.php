<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "style.css" />
        <script src="jquery-3.2.1.min.js"></script>
        <script src="Jquery.js"></script>


    </head>
    <body>
        <div>
            <h2 class="heading">CUSTOMER REGISTRATION FORM</h2>
        </div>
        <div id="container">
            <div id="container_body">

                <form  method="post" action="register_action.php" enctype="multipart/form-data">
                    <div id="errorBox"></div>
                    <div class="name_form">
                        <label> Name: </label>
                        <input type="text" id="name" name="name"  placeholder="Enter Your Name.." class="input_text">   
                        <span class="hidden" id="name_error"> </span>
                    </div>
                    <div class="pwd_form">
                        <label> Password : </label>
                        <input type="password" id="pwd" name="pwd" placeholder="Your Password" class="input_text">   
                        <span class="hidden" id="name_error"> </span>
                    </div>
                    <div id="email_form">
                        <label> Email: </label>
                        <input type="email" id="mail" name="mail" placeholder="Your Email" class="input_text">
                    </div>
                    <div id="mobile_form">
                        <label> Mobile: </label>
                        <input type="text" id ="mobile" name="mobile"  placeholder="Your Mobile Number" class="input_mobile">
                    </div>
                    <div id ="image_form">
                        <label> Select File : </label>
                        <input type="file" name="file_img"> <input type="submit" name="upload" value="upload">
                    </div>
                    <div id="gender_form">
                        <label>Gender : </label>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female

                    </div>

                    <div id="address_form">
                        <label>Address : </label>
                        <textarea id="address" name="address" rows="5"  placeholder="Enter Your Address!!!"></textarea>
                        <div id="submit_button">
                            <input align="right" type="submit"  name="submit" class="btn" value="Submit"></td></tr>
                        </div>
                    </div>
                </form>



                </body>
                </html>


