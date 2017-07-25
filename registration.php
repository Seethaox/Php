


<html>
    <head>
        <title> HTML Form </title>
        <style> 
        #container{
 width:700px;
 height:600px;
 background-color:pink;
 margin:auto;
 margin-top:10px;
 margin-bottom:10px;
 }
 input[type="text"],[type="password"]
{
        margin-top : 20px;
	width:300px;
	height:30px;
	font-size:17px;
	margin-bottom:20px;
	padding-left:30px;
	background: #fff;
	border: none;

        </style>

    </head>
    <body>
        <form action="register_action.php"  method="post" enctype="multipart/form-data">
            <br><br>
            <center><h1> USER REGISTRATION FORM </h1></center><br><br>
            <div id ="container">
                <table align="center" height="500px" width="400px">
                    
                        <tr><td>Name: </td><td><input type="text" id="name" name="name"  placeholder="Enter Your Name..."></td></tr>
                        <tr><td>Password: </td><td><input type="password" id="pwd" name="pwd"  placeholder="Enter a Password..."></td></tr>
                        <tr><td>Email: </td><td><input type="text" id="mail" name="mail" placeholder="Enter Your e-mail address..."></td></tr>
                        <tr><td>Contact no: </td><td><input type="text" id="mobile" name="mobile" placeholder="Enter Your Mobile Number..."></td></tr>

                        <tr><td>Select File: </td><td><input type="file" name="file_img"></td><td><input type="submit" name="upload" value="upload"></td></tr>
                        <tr><td> Gender : </td><td><input type="radio" name="gender" value="male"> Male
                                <input type="radio" name="gender" value="female"> Female</td></tr>
                      

                       

                        <tr><td> Address:</td><td> <textarea id="address" rows="5" name='address' placeholder="Give Your Feedback!!!"></textarea></td>
                        <tr><td></td><td>
                                <input type="submit"  name="submit" class="btn" value="Submit"></td></tr>
                </table>
            </div>
        </form>

    </body>
</html>



