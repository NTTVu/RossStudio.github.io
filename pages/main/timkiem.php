<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<h3>SẢN PHẨM : <?php echo $_POST['tukhoa']; ?></h3> 
            <ul class="productlist">
                <?php 
                while($row_pro = mysqli_fetch_array($query_pro)){
                ?>
                <li>
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
                    <p class="tittle_product">  <?php echo $row_pro['tensanpham'] ?> </p>
                    <p class="prise_product"> Giá: <?php echo number_format($row_pro['giasp'],0,',','.'). 'đ' ?> </p>
                    </a>
                </li>
                <?php
                }
                ?>
            </ul>