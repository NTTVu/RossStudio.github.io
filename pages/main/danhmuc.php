<?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc ='$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //ten danh muc
    $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc ='$_GET[id]' LIMIT 1 ";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);

?>




  <?php echo $row_title['tendanhmuc'] ?>
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