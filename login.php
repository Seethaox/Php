
<?php
if (!isset($_SESSION['id'])) {
    session_start();
}
?>

<?php
include 'dbconnection.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pwd = $_POST['password'];

    if (empty($id) || empty($pwd)) {
        echo '<script language="javascript">';
        echo 'alert("Enter all Data")';
        echo '</script>';
    }

    $myquery = "select * from cus_register where id='$id' AND password='$pwd'";

    $result = mysqli_query($link, $myquery);
    if (mysqli_num_rows($result)== 1) {
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
                height:400px;
                background-color:pink;
                margin:0px auto;
                text-align: center;
                margin-top:38px;
                border-radius:5px;
                opacity:.7;
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


        </style>

    </head>
    <body>
        <h3 align="center"> USER LOGIN PAGE</font> </h3>
        <table width="288" border="0" align="center">
            <tr>
                <td width="256"><b><font color="red"><?php if ($result) {
    echo $msg;
} ?></b></font></td>
            </tr>
        </table>
        <br>
        <div class="container">

            <form method="POST" action="">
                Customer ID :<input type ="text" name="id" placeholder="Enter your Customer Id"><br>
                Password : <input type ="password" name="password" placeholder="Enter your Password"><br><br><br><br>

                <button name="submit" type="submit" class="login">
                    Login
                </button>


            </form>
        </div>
        <p align=center><font color=red><b>New User ? </b> <a href="registration.php">
                <b>Register Here.. </b> </a> </font> </p>

    </body>
</html>

