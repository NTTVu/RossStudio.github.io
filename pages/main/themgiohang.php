<?php
    session_start();
    include('../../admincp/config/config.php');
    // xóa sp
	if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
			}

		$_SESSION['cart'] = $product;
		header('Location:../../index.php?quanly=giohang');
		}
	}
	//xóa tất cả sp
  	if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
	unset($_SESSION['cart']);
	header('location:../../index.php?quanly=giohang');
	}  
	// thêm sp vào giỏ
    if(isset($_POST['themgiohang']))
    {
		
        $id= $_GET['idsanpham'];
        $soluong=1;
        $sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'giasp'=>$row['giasp'],'hinhanh'=>$row['hinhanh'],));
            //ktra session gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'giasp'=>$cart_item['giasp'],'hinhanh'=>$cart_item['hinhanh']);
					}
				}
				if($found==false){
					$_SESSION['cart']= array_merge($product,$new_product);
				}
				else{
					$_SESSION['cart']=  $product;
				}
				
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
        

        header('location:../../index.php?quanly=giohang');
        }
    
?>