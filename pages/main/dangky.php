
<?php
	

	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['tenkhachhang'];
		$email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
		$sdt = $_POST['sdt'];
	    $diachi = $_POST['diachi'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_khachhang(tenkhachhang,email,matkhau,sdt,diachi) VALUE('".$tenkhachhang."','".$email."','".$matkhau."','".$sdt."','".$diachi."')");
		if($sql_dangky){
			echo '<p style="color:green">Đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_dangky'] = mysqli_insert_id($mysqli);
			header('location:index.php?quanly=giohang');
			
		}
	}
?>



	

<form action="" method="POST">
<table class="dangky" border="3" width="53%" style="border-collapse: collapse;">
	<tr>
				<p>ĐĂNG KÝ THÀNH VIÊN</p>
		<td>Tài Khoản</td>
		<td><input type="text" size="60" name="tenkhachhang"></td>
	</tr>
	<tr>
		<td>Mật Khẩu</td>
		<td><input type="password" size="60" name="matkhau"></td>
	</tr>
	
	<tr>
		<td>Email</td>
		<td><input type="text" size="60" name="email"></td>
	</tr>
	<tr>
		<td>Điện Thoại</td>
		<td><input type="text" size="60" name="sdt"></td>
	</tr>
    <tr>
		<td>Địa Chỉ</td>
		<td><input type="text" size="60" name="diachi"></td>
	</tr>
	</table>
	
	<tr>
		
		<td><input type="submit" name="dangky" value="ĐĂNG KÝ"></td>
		<td><a href="index.php?quanly=dangnhap">ĐĂNG NHẬP</a></td>
       
	</tr>


</form>