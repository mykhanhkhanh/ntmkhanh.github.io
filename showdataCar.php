<?php
            require_once 'connection-info.php';
            $conn = new mysqli($servername,$username,$password,$dbname)
                         or die("Connect failed " . $conn->connect_error);
            
            $query = "SELECT * FROM Xe";
            $result = $conn->query($query) or die("Query failed: ".$conn->error);
        
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
?>