
<p> Khách Hàng: 
  <?php
  if(isset($_SESSION['dangky'])){
    echo $_SESSION['dangky'];
  }
  ?>
</p>

<?php

	if(isset($_SESSION['cart'])){
		
	}
?>
<table style="width:100%;text-align: center;border-collapse: collapse;" border="1">

  <tr>
    <th>Tên Sản Phẩm:</th>
    <th>Hình Ảnh</th>
    <th>Số Lượng</th>
	<th>Giá</th>
	<th>Thành Tiền</th>
	<th>Quản Lý</th>
	</tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
    	
    	<?php echo $cart_item['soluong']; ?>

    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'đ'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'đ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td colspan="6">
    	<p style="float: left;">Tổng Tiền: <?php echo number_format($tongtien,0,',','.').'đ' ?></p><br/>
    	<p style="float: right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá Tất Cả </a></p>
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <p><a href="pages/main/thanhtoan.php">Đặt Hàng</a></p>
      <?php
        }else{
      ?>
        <p><a href="index.php?quanly=dangky">Đăng Ký Đặt Hàng</a></p>
      <?php
        }
      ?>
      
      
      
           
      
     


    </td>

   
  </tr>
  
  <?php
  } 
  ?>
</table>