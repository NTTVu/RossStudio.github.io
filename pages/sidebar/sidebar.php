<div class="sidebar"> 
        <ul class="listsidebar">
        <?php
            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);//Hàm mysqli_query() sẽ thực hiện truy vấn đối với cơ sở dữ liệu.
            while($row = mysqli_fetch_array($query_danhmuc)){ //mysqli_fetch_array() sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp, mảng liên tục hoặc cả hai
        ?>
            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?> </a></li>
        <?php
            }
        ?>
        </ul>    
        </div> 