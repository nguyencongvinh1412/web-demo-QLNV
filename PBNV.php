<?php
    // mo ket noi database 
    $link = mysqli_connect("localhost","root","") or die("Khong ket noi duoc database");
    // chon csdl
    mysqli_select_db($link,'dulieu');
    // query du lieu ve
    $result = mysqli_query($link, "select * from nhanvien");
    // dong ket noi
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin phong ban nhan vien</title>
</head>
<body>
    <div>
        <table class="table" border="1", width="100%">
            <thead>
                <tr>
                    <th>ID Nhân Viên</th>
                    <th>Họ Và Tên</th>
                    <th>ID Phòng Ban</th>
                    <th>Địa Chỉ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($result) >0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $idnv = $row[0];
                            $ten = $row[1];
                            $idpb = $row[2];
                            $diachi = $row[3];
                            echo
                            "
                                <tr>
                                    <td>$idnv</td>
                                    <td>$ten</td>
                                    <td>$idpb</td>
                                    <td>$diachi</td>
                                </tr>
                            ";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>