<?php
    $mapb = $_REQUEST['idpb'];
    $tenpb = $_REQUEST['tenpb'];
    $mota = $_REQUEST['mota'];

    // mo ket noi den database 
    $link = mysqli_connect("localhost","root","") or die ("Khong ket noi den database duoc");
    // chon csdl 
    mysqli_select_db($link, 'dulieu');
    // update gia tri moi 
    $ret = mysqli_query($link, "update phongban set IDPB='$mapb', Tenpb='$tenpb', Mota='$mota' where IDPB='$mapb' or Tenpb='$tenpb' or Mota='$mota'");
    // dong lien ket
    mysqli_close($link);
    header("Location:capnhat.php");
?>