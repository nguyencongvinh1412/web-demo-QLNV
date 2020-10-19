<?php
// lay IDPB tu trang xemthongtinPB.php
    $mapb = $_REQUEST['IDPB'];
    $link = mysqli_connect("localhost","root","") or die("Khong the ket noi database");
    // lua chon csdl se ket noi 
    $db_selected = mysqli_select_db($link, 'dulieu');
    if($mapb == "")
    {
        $result = mysqli_query($link,'select * from nhanvien');
    }
    else 
    {
        $result = mysqli_query($link, "select * from nhanvien where IDPB=$mapb");
    }
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem Thong Tin NVPB</title>
</head>
<body>
    <form>
        <table class="table" border="1" width="100%" text-align="center">
            <caption><h2>Du lieu bang nhan vien</h2></caption>
            <thead>
                <tr>
                    <th>IDNV</th>
                    <th>Ho Ten</th>
                    <th>IDPB</th>
                    <th>Dia Chi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(mysqli_num_rows($result) > 0)
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
    </form>
</body>
</html>