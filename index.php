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
            th{
                text-align :left;
                padding: 8px;
                color: white;
            }
            td{
                text-align :left;
                padding: 8px;
                height: 150px;
                width: 110px;
            }
            img {
                width: 100%;
                height: 100%;
            }
            #container
            {
                width: 700px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <div id="container">
        <h2 align="center">HOME PAGE </h2><br><br>
        <a href="registration.php"> <button type="submit" class="btn"> Register </button></a>
        <a href="login.php"> <button type="submit" class="btn"> Login </button></a>


    <?php
    include 'dbconnection.php';

    $myquery = "select id,pic,name,mail,address from cus_register";
    $result = mysqli_query($link, $myquery);
    ?>
    <br><br><br>
    <table border="4" style="border-collapse:collapse">           
        <tr bgcolor="#3a6070">             

            
            <th>Customer Name</th>
            <th>Profile Picture </th>
            <th>Email</th> 
            <th>Address</th>
          
        </tr>

        <?php
        if (mysqli_num_rows($result) != 0) {

            while ($row = mysqli_fetch_array($result)) {

                $name = $row['name'];
                $email = $row['mail'];
                $address = $row['address'];
                ?>
                <tr>
                    
                    <td><?php echo $name; ?></td>
                    <td> <?php echo "<img src='" . $row['pic'] . "'/>"; ?></td>
                    <td><?php echo $email; ?></td>
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