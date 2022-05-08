<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" type="text/css" href="css/style-insertbooking.css"/>
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
        <div id="homepage">
            <div class="icongiohang">
                <a href="Listhasbuy.php"><img src="img/icon-giohang1.png" width="50px" height="50px"></a>
            </div>
        <a href="main.php"><button id="btn-Homepage">HomePage</button></a>
        </div>
        <hr  width="100%" size="2px" color="gray" >
        <form action="insert-booking.php" method="POST">
           <h2> Thông tin đặt </h2>
                        <pre>
                    User Name  <input type="text" name="username_booking" size="60px" class="txt-booking"/><br>
                       ID Car  <input type="text" name="IDcar_booking" size="60px" class="txt-booking"/><br>
                 Date Booking  <input type="date" name="date_booking"  class="txt-booking"/><br>
                 Home  Adress  <input type="text" name="addr_booking" size="60px" class="txt-booking"/><br>
                        Color  <input type="text" name="color_booking" size="60px" class="txt-booking"/><br>
                     Quantity  <input type="text" name="qty_booking" size="60px" class="txt-booking"/><br>    
                               <input type="submit" value="Book" class="btn-booking" id="btn-booking">
                        </pre>
        </form>
        <script>
                var button = document.getElementById("btn-booking")
                button.onclick = function(){
                    alert("Đặt xe thành công!")
                }
            </script>
        <?php
            require "connection-info.php";
            $conn = new mysqli($servername,$username,$password,$dbname)
                    or die("Connect failed " . $conn->connect_error);

                    
            if(isset($_POST["username_booking"]) && isset($_POST["IDcar_booking"]) && isset($_POST["date_booking"])
            && isset($_POST["addr_booking"]) && isset($_POST["color_booking"]) && isset($_POST["qty_booking"])) {
                $user_name_booking = $_POST["username_booking"];
                $ID_car_booking = $_POST["IDcar_booking"];
                $da_te_booking = $_POST["date_booking"];
                $addr_booking = $_POST["addr_booking"];
                $co_lor_booking = $_POST["color_booking"];
                $q_ty_booking = $_POST["qty_booking"];
            
                $query ="INSERT INTO booking(username,IDXe ,datebooking,adrreceive,color, quantity)
                VALUES('$user_name_booking', '$ID_car_booking', '$da_te_booking','$addr_booking', '$co_lor_booking','$q_ty_booking')";
                $result = $conn->query($query) or die("Insert failed: ".$conn->error);
            }        
        ?>
</div>
</body>
</html>