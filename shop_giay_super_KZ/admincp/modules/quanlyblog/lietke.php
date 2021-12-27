<?php
	$sql_lietke_sp = "SELECT * FROM tbl_contact ORDER BY id DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>Liệt kê danh mục bài viết</p>
<!-- <table style="width:100%" border="1" style="border-collapse: collapse;"> -->
<table class="table table-success table-striped">
  <tr>
  	<th>Id</th>
    <th>Nội dung</th>
    <th>Hình ảnh</th>
    <th>Tiêu đề</th>
    <th>Tác giả</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $row['id'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><img src="modules/quanlyblog/uploads/<?php echo $row['anh_blog'] ?>" width="300px"></td>
    <td><?php echo $row['tieude'] ?></td>
    <td><?php echo $row['tacgia'] ?></td>
   	<td>
   		<a href="modules/quanlyblog/xuly.php?id=<?php echo $row['id'] ?>">Xoá</a> | <a href="?action=quanlyblog&query=sua&id=<?php echo $row['id'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>