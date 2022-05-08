<?php  
                                require "connection-info.php";
                                $conn = new mysqli($servername,$username,$password,$dbname)
                                             or die("Connect failed " . $conn->connect_error);
                            
                                if (empty($_REQUEST["searchcar"])) {
                                } else if (isset($_REQUEST["searchcar"])) {
                                    $search = $_REQUEST["searchcar"];
                                    $query = "SELECT * from Xe where TenXe like '%$search%'";
                                    $result = $conn->query($query) or die("Qurey failed " . $conn->error);
                                    while($row = $result->fetch_assoc()){
                                        echo "
                                            <li> 
                                                <div class=\"products-item\">
                                                    <a href=\"showDetailCar.php?name=$row[IDXe]\">
                                                    <div>
                                                        <img class=\"imgCar_sanpham\" src='Load-imgCar.php?name=$row[IDXe]'>
                                                    </div>
                                                    </a>
                                                    <div>
                                                    Tên Xe: $row[TenXe]<br> 
                                                    Xuất Xứ: $row[XuatXu]<br> 
                                                    Giá: $row[Gia] VNĐ
                                                    </div>
                                                <div>
                                            </li>";
                                            }
                                }
?> 