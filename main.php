<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTQLXe</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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
            <div class="tab">
                <a href="main.php">
                <hr  width="100%" size="2px" color="gray" >
                    <button class="tablinks active">Home_Page</button>
                </a>
                    <button class="tablinks">Product</button>
                    <button class="tablinks">Search</button>
                    <div class="icongiohang">
                <?php
                    if(isset($_SESSION['loai_TK']) && $_SESSION['loai_TK'] == 1){
                        echo "
                        <a href=\"Listhasbuy.php\"><img src=\"img/icon-giohang1.png\" width=\"50px\" height=\"50px\" class=\"icongiohang\"></a>";
                    }
                ?>
            </div>
            </div>
            <div id="Home_page" class="tabcontent">
                <div>
                    <img class="mySlides" src="img/slideshow1.jpg"  alt="">
                    <img class="mySlides" src="img/slideshow2.jpg"  alt="">
                    <img class="mySlides" src="img/slideshow3.jpg"  alt="">
                </div>
            </div>
            <div id="Product" class="tabcontent">
            <?php
            if(isset($_SESSION['loai_TK']) && $_SESSION['loai_TK'] == 0){
		        echo "<a href=\"Addcar.php\">
                    <input type=\"button\" name=\"btn-themcar\" id=\"btn-Themcar\" size=\"100px\" value=\"ADD CAR\">
                    </a>";
	            }
            ?>
                <ul class="products">
                    <?php include("showdataCar.php") ?>
                </ul>
            </div>
            <div id="Search" class="tabcontent">
                    <form class="form-search" action="main.php" method="$_REQUEST">
                        <input type="text" name="searchcar" id="Searchcar" placeholder="Search product..."> <input type="submit" name="btn-search" id="btn-Search" value="Search">
                    </form>
                    <ul>
                        <?php include("searchcar.php") ?>
                    </ul>
            </div>
    </div>
    <hr  width="100%" size="2px" color="gray" >
    <div id="footer">
        <div>
            <ul>
                <li>
                    <h2>
                        About Us
                    </h2>
                    <p>KN l?? website chuy??n cung c???p c??c d??ng xe cao c???p ?????n t??? th????ng hi???u Mercedes v?? BMW. 
                        T???i ????y, kh??ch h??ng s??? ???????c cung c???p ?????y ????? th??ng tin v?? gi?? c???a c??c m???u xe. 
                        H??n n???a, ch??ng t??i lu??n t???n t??m t?? v???n m???i th???c m???c cho kh??ch h??ng.</p>
                </li>
                <li>
                    <h2>
                        Contact Us
                    </h2><br>
                    <div class="info">
                        Can Tho University, 3/2 Street, Ninh Kieu, Can Tho City, Viet Nam<br>
                        Phone: 0773856988 or 0976038762<br>
                        Email: nghiab1910672@student.ctu.edu.vn<br>
                        Email: khanhb1910657@student.ctu.edu.vn
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="js/tab.js"></script>
    <script src="js/slideshow-trangchu.js"></script>
</body>
</html>