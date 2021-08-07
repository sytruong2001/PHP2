<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: #FAF5E7">
    <h1 style="text-align: center">Danh sách khách hàng</h1>
    <h3>
        <button style="color: blue; height: 30px">
            <a href="customers/create"style="text-decoration: none">
                Thêm mới khách hàng
            </a>
        </button>
    </h3>

    <table border="1" cellpadding="0" cellspacing="0" style="width:100%">
		<tr style="height:35px; background: white">
			<th>STT</th>
			<th>Mã khách hàng</th>
			<th>Avatar</th>
			<th>Họ tên</th>
			<th>Giới tính</th>
			<th>Số điện thoại</th>
			<th>Email</th>
		</tr>

		<?php 
			$index = 1;
			foreach($result as $customer):
		?>

		<tr style="text-align: center">
			<td><?= $index++;?></td>
			<td><?= $customer->idCus?></td>
			<td><img src="image/<?= $customer->avatar?>" width = "100px"; height = "100px"></td>
			<td><?= $customer->fullname?></td>
			<td><?= $customer->gender == 1 ? 'Nam' : 'Nữ'?></td>
			<td><?= $customer->phone?></td>
			<td><?= $customer->email?></td>
		</tr>
		<?php endforeach ?>
	</table>
</body>
</html>