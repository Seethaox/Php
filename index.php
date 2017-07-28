
<html>
    <head>
      
       <link rel = "stylesheet" type = "text/css" href = "style.css" />
    </head>
    <body>
        <div id="content">
        <h2 align="center">HOME PAGE </h2><br><br>
        <a href="register.php"> <button type="submit" class="btn"> Register </button></a>
        <a href="login.php"> <button type="submit" class="btn"> Login </button></a>


    <?php
    include 'dbconnection.php';

    $myquery = "select id,pic,name,mail,dob,address from cus_register";
    $result = mysqli_query($link, $myquery);
    ?>
    <br><br><br>
    <table  border="4" style="border-collapse:collapse">           
        <tr bgcolor="#3a6070">             

            <th> Customer ID </th>
            <th>Customer Name</th>
            <th>Profile Picture </th>
            <th>Email</th> 
            <th>Date of Birth</th> 
            <th>Address</th>
          
        </tr>

        <?php
        if (mysqli_num_rows($result) != 0) {

            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['mail'];
                $date = $row['date'];
                $address = $row['address'];
                ?>
                <tr>
                     <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td> <?php echo "<img src='" . $row['pic'] . "'/>"; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $address; ?></td> 
                    
                </tr>  
                <?php
            }
        }
        ?>

    </table>
        </div>
</body>

</body>
</html>