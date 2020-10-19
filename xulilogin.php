<?php
    // nhan lai bien username va bien password
    $user = $_REQUEST['username'];
    $pass = $_REQUEST['password'];

    // kiem tra user va pass da duoc nhap vao chua
    if($user == "" || $pass == "")
    {
        header("Location:login.php");
    }
    else 
    {
        // mo ket noi database
        $link = mysqli_connect("localhost", "root", "") or die("Khong the ket noi database");
        // chon CSDL de lam viec
        $db_selected = mysqli_select_db($link, 'dulieu');
        // lay tat ca cac ban ghi trong bang admin voi user va pass nhap vao tuong ung 
        $rs = mysqli_query($link,"select * from admin where Username = '$user' and Password = '$pass'");
        // kiem  tra co ban ghi tra ve ko
        if(mysqli_num_rows($rs) == 0)
        {
            // neu khong co ban ghi tra ve thi quay lai trang login
            header("Location:login.php");
        }
        else 
        {
            // neu co ban ghi tra ve thi di den trang capnhap
            header("Location:capnhat.php");
        }
        // giai phong tap cac ban ghi trong $rs 
        mysqli_free_result($rs);
        mysqli_close($link);
    }
?>