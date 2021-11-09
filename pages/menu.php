<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc); //Hàm mysqli_query() sẽ thực hiện truy vấn đối với cơ sở dữ liệu.
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){ // isset() ktra biến đã đc khởi tạo( tồn tại)
		unset($_SESSION['dangky']); // unset() loại bỏ biến được truyển vào
	} 
?>

<div class="menu">
    <ul class="listmenu">
            <li><a href="index.php">TRANG CHỦ</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="https://www.facebook.com/ROSSSTUDIOWOMENS">LIÊN HỆ</a></li>

            
            <li><a href="index.php?quanly=giohang">GIỎ HÀNG</a></li>
            <?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">ĐĂNG XUẤT</a></li>
				
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">ĐĂNG KÝ</a></li> 
				<?php
				} 
				?> 
                
			
                
        </ul>
				
        <p> 
				<form action="index.php?quanly=timkiem" method="POST">
					<input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" value="Tìm kiếm">
				</form>
				
		</p>	

       
    </div>
	