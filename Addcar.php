<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm xe</title>
</head>
<body>
    <div id="container-add">
            <form action="Addcar.php" method="POST">
                        <pre>
                       Mã xe  <input type="text" name="IDXe_add" size="60px"/><br>
                      Tên xe  <input type="text" name="TenXe_add" size="60px"/><br>
              Mã Thương Hiệu  <input type="text" name="IDthuonghieu_add" size="60px"/><br>
                  Mã Loại Xe  <input type="text" name="IDLoaixe_add" size="60px"/><br>
                 Số Chỗ Ngồi  <input type="text" name="Socho_add" size="60px"/><br>
                     Xuất Xứ  <input type="text" name="Xuatxu_add" size="60px"/><br>        
                      Giá cả  <input type="text" name="Gia_add" size="60px"/><br>        
                              <input type="submit" value="Thêm Xe">
                        </pre>
            </form>
            <a href="insert-form-Img.html">Chèn Ảnh</a>
    <?php
        require_once 'connection-info.php';
        $conn = new mysqli($servername,$username,$password,$dbname)
            or die("Connect failed " . $conn->connect_error);
    
    
        if(isset($_POST["IDXe_add"]) && isset($_POST["TenXe_add"]) && isset($_POST["IDthuonghieu_add"])
        && isset($_POST["IDLoaixe_add"]) && isset($_POST["Socho_add"]) && isset($_POST["Xuatxu_add"]) && isset($_POST["Gia_add"])) {
            $ID_Xe_add = $_POST["IDXe_add"];
            $Ten_Xe_add = $_POST["TenXe_add"];
            $ID_thuong_hieu_add = $_POST["IDthuonghieu_add"];
            $ID_Loai_xe_add = $_POST["IDLoaixe_add"];
            $So_cho_add = $_POST["Socho_add"];
            $Xuat_xu_add = $_POST["Xuatxu_add"];
            $Gia_add = $_POST["Gia_add"];
        
            $query ="INSERT INTO Xe(IDXe,TenXe ,IDThuongHieu,IDLoaiXe,SoCho, XuatXu, Gia)
            VALUES('$ID_Xe_add', '$Ten_Xe_add', '$ID_thuong_hieu_add','$ID_Loai_xe_add', '$So_cho_add','$Xuat_xu_add','$Gia_add')";
            $result = $conn->query($query) or die("Insert failed: ".$conn->error);
        }
        ?>
    </div>
</body>
</html>