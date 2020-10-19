<?php
    $link = mysqli_connect("localhost", "root") or die("Khong the truy cap CSDL");
    mysqli_select_db($link,"dulieu");
    $result = mysqli_query($link,"select * from phongban");
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin phong ban</title>
</head>
<body>
    <div>
        <table class="table" border="1", width = "100%">
            <caption><h1>Xem Thong Tin Phong Ban</h1></caption>
            <thead>
                <tr>
                    <th>IDPB</th>
                    <th>Ten PB</th>
                    <th>Mo ta PB</th>
                    <th>Xem Nhan Vien Phong Ban</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $id = $row[0];
                            $ten = $row[1];
                            $mota = $row[2];
                            echo
                            "
                            <tr>
                                <td>$id</td>
                                <td>$ten</td>
                                <td>$mota</td>
                                <td style=\"text-align: center;\"><a href=\"xemthongtinNVPB.php?IDPB='$row[0]'\">xxx</a></td>
                            ";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>