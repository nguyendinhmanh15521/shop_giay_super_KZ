<?php
	$sql_sua_sp = "SELECT * FROM tbl_contact WHERE id='$_GET[id]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p>Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="modules/quanlyblog/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  <tr>
      <td>nội dung: </td>
      <td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
	  </tr>
      <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="anh_blog">
	  		<img src="modules/quanlyblog/uploads/<?php echo $row['anh_blog'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	  	<td>Tiêu đề: </td>
	  	<td><input type="text" value="<?php echo $row['tieude'] ?>" name="tieude"></td>
	  </tr>
	  <tr>
	  	<td>Tác giả: </td>
	  	<td><input type="text" value="<?php echo $row['tacgia'] ?>" name="tacgia"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>