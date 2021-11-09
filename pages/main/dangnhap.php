<?php
	if(isset($_POST['dangnhap'])){
		$tenkhachhang = $_POST['tenkhachhang'];
		$matkhau = md5($_POST['matkhau']);
		$sql = "SELECT * FROM tbl_khachhang WHERE tenkhachhang='".$tenkhachhang."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangky'] = $tenkhachhang;
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style= "coler:red">Sai tên đăng nhập hoặc mật khẩu</p>';
			
		}
	} 
?>
<form action="" autocomplete="off" method="POST">
		<table border="3" width="50%" class="table-login" style="text-align: center;border-collapse: collapse;">
			<tr>
				<td colspan="2"><h3>ĐĂNG NHẬP</h3></td>
			</tr>
			<tr>
				<td>Tài khoản</td>
				<td><input type="text" size="50" name="tenkhachhang" placeholder="Tên đăng nhập..."></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" size="50" name="matkhau" placeholder="Mật khẩu..."></td>
			</tr>
			<tr>
				
				<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
			</tr>
	</table>
	</form>