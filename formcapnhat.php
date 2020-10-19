<?php
    // lay ma phong ban tu trang capnhat.php
    $mapb = $_REQUEST['IDPB'];
    // mo ket noi database
    $link = mysqli_connect("localhost","root","") or die("khong the ket noi database");
    // lua chon csdl
    mysqli_select_db($link,'dulieu');
    // query du lieu ve voi ma phong ban nhap vao
    $result = mysqli_query($link,"select * from phongban where IDPB=$mapb");
    // dong ket noi database
    mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cap Nhat</title>
</head>
<body>
    <form action="xulycapnhat.php", method="post">
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
                        <table>
                            <caption><h2>Cap Nhat Thong Tin</h2></caption>
                            <tr>
                                <td>IDPB : </td>
                                <td><input type=\"text\" name=\"idpb\" value=\"$idpb\"></td>
                            </tr>
                            <tr>
                                <td>Ten PB : </td>
                                <td><input type=\"text\" name=\"tenpb\" value=\"$tenpb\"></td>
                            </tr>
                            <tr>
                                <td>Mo Ta : </td>
                                <td><input type=\"text\" name=\"mota\" value=\"$mota\"></td>
                            </tr>
                            <tr align='center'>
                                <td colspan='2'>
                                    <input type=\"submit\" value=\"OK\">
                                    <input type=\"Reset\" value=\"Reset\">
                            </tr>
                        </table>
                    ";
                }
            }
        ?>
    </form>
</body>
</html>