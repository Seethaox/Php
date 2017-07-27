
<html>
    <head>
        <title> REGISTRATION </title>
    </head>
    <body>
       
        <?php
        include 'dbconnection.php';
        if (isset($_POST['submit'])) {
            $username = $_POST['name'];
            $password = $_POST['pwd'];
            $email = $_POST['email'];

            $mobile = $_POST['mobile'];
            $gender = $_POST['gender'];
            $date = $_POST['date'];
            $address = $_POST['address'];
            $filetmp = $_FILES['file_img']['tmp_name'];
            $filename = $_FILES['file_img']['name'];
                    $location = "Photos/";

                    $filepath = $location . $filename;
                    move_uploaded_file($filetmp, $filepath);
                    


            $myquery = "INSERT into cus_register (name,password,pic,mail,mobile, gender,dob,address) VALUES ('$username','$password','$filepath', '$email', '$mobile', '$gender','$date','$address')";

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
