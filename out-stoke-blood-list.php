<?php
 include('connection.php');
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Out stoke Blood List</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        td{
            width:200px ;
            height: 20px;
        }
    </style>
</head>
<div>

<div id="full">
    <div id="inner_full">
        <div id="header"><h2 ><a href="admin-home.php" style="text-decoration:none;color:white;">Blood Donation Bank Management System </a></h2></div>
        <div id="body">
            <br>
            <?php
           // $un=$_SESSION['un'];
            //if(!$un)
            {
                //header("location:index.php");
            }
            ?>
            <h1>Out stoke Blood List</h1>
            <center><div id="form">
                <table>
                    <tr>
                        <td><center><b><font color="blue">First Name</font></b></center> </td>
                        <td><center><b><font color="blue">Phone number</font></b></center> </td>
                        <td><center><b><font color="blue">Blood Type</font></b></center> </td>
                    </tr>
                    <?php
                    $q=$db->query("SELECT * FROM out_stoke_bb");
                    while($r1=$q->fetch(PDO::FETCH_OBJ))
                    {
                        ?>
                        <tr>
                        <td><center><?= $r1->name; ?></center></td>
                        <td><center><?= $r1->mno; ?></center></td>
                        <td><center><?= $r1->bname; ?></center></td>
                        </tr>

                        <?php
                    }
                    ?>
                </table>
            </div></center>
        </div>
        <div id="footer">
            <h4 align="center">Copyright@BY STUDENTS</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>

        </div>

    </div>
</div>
</body>
</html>