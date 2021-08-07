<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="background: #FAF5E7">
	<h1 style="text-align: center">Thêm khách hàng</h1>
	<form action="createProcess" method="post" style="text-align: center; width:100%" >
        <table style="margin:auto">
            <tr>
                <td style="width:150px">Avatar:</td>
                <td>
                    <input type="file" name="avatar" style="height:30px">
                </td>
            </tr>
            <br>
            <tr>
                <td style="width:150px">Họ và tên:</td>
                <td>
                    <input type="text" name="fullname" style="height:30px">
                </td>
            </tr>
            <br>
            <tr>
                <td style="width:150px">Giới tính:</td>
                <td>
                    <input type="radio" name="gender" style="height:30px" value="0"> Nam
                    <input type="radio" name="gender" style="height:30px" value="1"> Nữ
                </td>
            </tr>
            <br>
            <tr>
                <td style="width:150px">Số điện thoại:</td>
                <td>
                    <input type="number" name="phone" style="height:30px">
                </td>
            </tr>
            <br>
            <tr>
                <td style="width:150px">Email:</td>
                <td>
                    <input type="text" name="email" style="height:30px">
                </td>
            </tr>
            <br>
 		
        </table>
        <button style="width:100px; height:30px; color:green">Thêm</button>
	</form>
</body>
</html>