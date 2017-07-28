<?php
    session_start();
if (isset($_SESSION['id'])) {
    header('location: login_data.php');
}
?>

<?php
include 'dbconnection.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pwd = $_POST['password'];
    if (empty($id) || empty($pwd)) {
        echo '<script language="javascript"> alert("Enter all data")</script>';
    }
    $myquery = "select * from cus_register where id='$id' AND password='$pwd'";
    $result = mysqli_query($link, $myquery);
    if (mysqli_num_rows($result)== 1) {
        session_start();
        $_SESSION['id'] = $id;
        header('location: login_data.php');
    }
    
    else
    {
        echo 'Incorrect UserId or Password';
       
    }
    
}
?>
<html>
    <head>
        <style>
            .container
            {
                width:500px;
                background-color:pink;
                margin:0px auto;
                text-align: center;
                margin-top:38px;
                border-radius:5px;
                opacity:.7;
            }
			label
			{
			width:100px;
	 padding-left: 10px;
	 color: blue;
	 font-weight: bold;
	 margin: 10px 20px;
    display: inline-block;
	}
            input[type="text"],[type="password"]
            {
                 width: 300px;
    display: inline-block;
    border-radius: 4px;
	margin-top: 15px;
	padding: 7px;
   
            }
            .login{
                border:none;
                padding: 15px 30px;
                background:skyblue;
                border-radius:5px;
                cursor:pointer;
                border-bottom:5px solid skyblue;
                margin-bottom:20px;
                font-weight : bold;
                font-family: Verdana;
            }
			h3{
				margin-top:15px;
				text-align: center;
			}
        </style>

    </head>
    <body>
         <div class="container">
        <h3> USER LOGIN </h3>
        <table width="288" border="0" align="center">
            <tr>
               
</b></font></td>
            </tr>
        </table>
        <br>
       

            <form method="POST" action="">
               <label> Customer ID :</label><input type ="text" name="id" placeholder="Enter your Customer Id"><br>
                <label>Password :</label> <input type ="password" name="password" placeholder="Enter your Password"><br><br><br><br>

                <button name="submit" type="submit" class="login">
                    Login
                </button>


            </form>
        </div>
        <p align=center><font color=red><b>New User ? </b> <a href="register.php">
                <b>Register Here.. </b> </a> </font> </p>

    </body>
</html>