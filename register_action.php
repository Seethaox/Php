
<html>
    <head>
        <title> REGISTRATION </title>
    </head>
    <body>
        <?php
        include 'dbconnection.php';
        if (isset($_POST['upload'])) {
            
        }
        ?>
        <?php
        include 'dbconnection.php';
        if (isset($_POST['submit'])) {
            $username = $_POST['name'];

            $password = $_POST['pwd'];
            $email = $_POST['mail'];

            $mobile = $_POST['mobile'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $filetmp = $_FILES["file_img"]["tmp_name"];
            $filename = $_FILES["file_img"]["name"];
            if (isset($filename)) {
                if (!empty($filename)) {
                    $location = "Photos/";

                    $filepath = "Photos/" . $filename;
                    if (move_uploaded_file($filetmp, $filepath)) {
                        echo "Uploaded";
                    }
                }
            }



            $myquery = "INSERT into cus_register (name,password,pic,mail,mobile, gender,address) VALUES ('$username','$password','$filepath', '$email', '$mobile', '$gender', '$address')";

            $result = mysqli_query($link, $myquery);

            if ($result) {
                echo '<script language="javascript">';
                echo 'alert("Registered Successfully.")';
                echo '</script>';

                $sqlquery = "select * from cus_register ORDER BY id DESC LIMIT 1";
                $result1 = mysqli_query($link, $sqlquery);
                while ($row = mysqli_fetch_array($result1)) {
                    $a = $row['id'];
                }
                echo '<b>Your Customer Id is :';
                echo $a;
                echo '<br><b> Please use your Customer ID and Password to Login in to your ACCOUNT !!!';
                echo '<br><a href="login.php"> Login to your account</a>';
            } else {

                echo "Not Registered successfully.";
            }
        }
        ?>
    </body>
</html>