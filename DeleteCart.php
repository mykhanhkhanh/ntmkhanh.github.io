<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" type="text/css" href="css/style-delete.css"/>
</head>
<body>
<div id="container">
        <header id="header">
            <div id="chua_logo">
                <table width="1500px">
                    <tr>
                        <td  class="fromleft" valign="top">
                            <img src="img/kn.png" alt="" width="160px" height="150px">
                        </td>
                        <td class="fromcenter">
                            <b>Car Management System</b>
                        </td>
                        <td class="fromright">
                            <div id="user">
                            <?php
                                if(!isset($_SESSION['username_login']))
                                echo "<a class=\"logout\" href=\"login.php\"><button>Log In</button></a>";

                                if(isset($_SESSION['username_login']) && $_SESSION['username_login'])
                                echo "<a class=\"logout\" href=\"logout.php\"><button>Log Out</button></a>";
                            ?>
                            </div>
                        </td>
                        <td class="fromcenter">
                                <img src="img/tk.jpg" width="100px" height="100px";>
                                <div id="user">
                                    <?php include("showname_user.php") ?>
                                </div>
                        </td>
                    </tr>
                </table>
            </div>
        </header>
</div>
    <div id="homepage">
        <a href="main.php"><button class="btn-Homepage">HomePage</button></a>||
        <a href="Listhasbuy.php"><button class="btn-Homepage">Previous</button></a>
    </div>
    <hr  width="100%" size="2px" color="gray" >
<?php
    include_once('connection-info.php');
    $conn = new mysqli($servername, $username,$password, $dbname)
            or die ("Connection failed " . $conn->connect_error);
            
    if(isset($_REQUEST['name']) and $_REQUEST['name']!=""){
    $sql = "DELETE FROM booking WHERE IDbooking='$_REQUEST[name]'";

    if ($conn->query($sql) === TRUE) {
    echo "<h1>Xoá thành công!<h1>";
    } else {
    echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    }
?>
</body>
</html>