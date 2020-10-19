<?php
    // mo ket noi database
    $link = mysqli_connect("localhost", "root") or die("Khong the truy cap CSDL");
    // lua chon database ket noi
    mysqli_select_db($link,"dulieu");
    // query du lieu tu table phongban
    $result = mysqli_query($link,"select * from phongban");
    // dong ket noi
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap Nhat</title>
</head>
<body>
    <div>
        <table class="table" border="1" width="100%">
            <caption><h2>Danh Sach Phong Ban</h2></caption>
            <thead>
                <tr>
                    <th>IDPB</th>
                    <th>Ten Phong Ban</th>
                    <th>Mo Ta</th>
                    <th>Cap Nhat</th>
                </tr>
            </thead>
            <tbody>
               <?php
                    if(mysqli_num_rows($result) >0)
                    {
                        while($row = mysqli_fetch_array($result))
                        {
                            $idpb = $row[0];
                            $tenpb = $row[1];
                            $mota = $row[2];
                            echo 
                            "
                                <tr>
                                    <td>$idpb</td>
                                    <td>$tenpb</td>
                                    <td>$mota</td>
                                    <td style=\"text-align:center;\"><a href=\"formcapnhat.php?IDPB='$row[0]'\">Cap Nhat</a></td>
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