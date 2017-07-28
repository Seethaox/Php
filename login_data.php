

<?php
session_start();
if (!isset($_SESSION['id'])) {

    header('location: login.php');
}
?>
<html>
    <head>
        <style>
            img
            {
                width: 100px;
                height:100px;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        include 'dbconnection.php';
        $cusid = $_SESSION['id'];

        $myquery = "select * from cus_register where id='$cusid'";
        $result = mysqli_query($link, $myquery);
        //$row = mysqli_fetch_array($result);
        while ($row = mysqli_fetch_array($result)) {
            ?>

            <?php echo '<br><br><b><center> Welcome &nbsp;' . $row['name'] . '</b>'; ?>
            <p>You are successfully logged in !!!</p>
            <h2> Your Profile Details !! </h2>
            <?php
            echo "DP : <img src='" . $row['pic'] . "'/><br>";
            echo 'Mail :' . $row['mail'] . '<br>';
            echo 'Mobile :' . $row['mobile'] . '<br>';
            echo 'Gender:' . $row['gender'] . '<br>';
            echo 'Address :' . $row['address'] . '<br>';
            ?>
            <a href="logout.php"> Logout </a>

        </body>
<?php } ?>

</html>

