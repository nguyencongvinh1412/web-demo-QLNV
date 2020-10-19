<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="xulilogin.php", method="post">
        <table class="table">
        <caption><h2>Dang nhap chuong trinh</h2></caption>
            <thead></thead>
            <tbody>
                <tr>
                    <td>UserName</td>
                    <td><input type="text", size='20', name='username'></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text", size='20', name='password'></td>
                </tr>
                <tr align='center'>
                    <td colspan='2'>
                        <input type="submit" value='OK'>
                        <input type="Reset" value='Reset'>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>