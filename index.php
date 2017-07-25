<html>
    <head>
        <style>
            .btn{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
}
        </style>
    </head>
    <body>
        <br><br><br>
        <h2 align="center">HOME PAGE </h2><br><br>
    <center>
        <a href="registration.php"> <button type="submit" class="btn"> Register </button></a>
        <a href="login.php"> <button type="submit" class="btn"> Login </button></a>

    </center>
    <?php
    include 'dbconnection.php';

    $myquery = "select * from cus_register";
    $result = mysqli_query($link, $myquery);
    $row = mysqli_fetch_array($result);
    ?>
    <br><br><br>
    <table bgcolor="white" width="95%" border="4" cellpadding="2" cellspacing="1" style="border-collapse:collapse">           
        <tr bgcolor="#3a6070">             
            <th><font color = "white" size = "3">Customer ID </font></th>             
            <th><font color = "white" size = "3">Customer Name </font>
            <th><font color = "white" size = "3">Profile Picture </font>
            <th><font color = "white" size = "3">Mobile </font></th> 
            <th><font color = "white" size = "3">Email </font></th> 
            <th><font color = "white" size = "3"> Gender </font></th> 
            <th><font color = "white" size = "3">Address </font></th>
        </tr>
        <tr>
            <?php
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    $id = $row[0];
                    $name = $row[1];
                    $address = $row[6];
                    $email = $row[3];
                    $mobile = $row[4];
                    $gender = $row[5];
                    ?>
                    <td><strong><div align="middle"> <?php echo $id; ?></strong></div></td>   

                    <td> <?php echo $name; ?></td> 
                    <td> </td>   

                    <td><?php echo $mobile; ?></td>

                    <td><?php echo $email; ?></td>

                    <td><?php echo $gender; ?></td>

                    <td><?php echo $address; ?></td> </tr>  
        <?php
    }
}
?>

    </table>
</body>

</body>
</html>