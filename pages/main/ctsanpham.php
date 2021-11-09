<?php
   $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham= '$_GET[id]'LIMIT 1";
   $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
<div class="hinhanhsp">
    <img width="70%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    
</div>
<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
<div class="chitietsp">
        <h2> <?php echo $row_chitiet['tensanpham'] ?> </h2>
        <p> Giá: <?php echo number_format($row_chitiet['giasp'],0,',','.'). 'đ' ?> </p>
        <p> Số lượng tồn: <?php echo $row_chitiet['soluong'] ?> </p>
        <p> Chi tiết sản phẩm: <?php echo $row_chitiet['noidung'] ?> </p>
        <p> <input class="themgiohang" name="themgiohang" type="submit" value="THÊM GIỎ HÀNG"></p>
</div>
</form>
</div>
<?php
}
?>