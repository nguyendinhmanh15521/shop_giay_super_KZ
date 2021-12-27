<?php
include('../../config/config.php');

$noidung = $_POST['noidung'];
$tieude = $_POST['tieude'];
$tacgia = $_POST['tacgia'];
//xuly hinh anh
$anh_blog = $_FILES['anh_blog']['name'];
$hinhanh_tmp = $_FILES['anh_blog']['tmp_name'];
$anh_blog = time().'_'.$anh_blog;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];


if(isset($_POST['thembaiviet'])){
	//them
	$sql_them = "INSERT INTO tbl_contact(noidung,anh_blog,tieude,tacgia) VALUE('".$noidung."','".$anh_blog."','".$tieude."','".$tacgia."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$anh_blog);
	header('Location:../../index.php?action=quanlyblog&query=lietke');
}elseif(isset($_POST['suasanpham'])){
	//sua
	if($anh_blog!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$anh_blog);
		
		$sql_update = "UPDATE tbl_contact SET noidung='".$noidung."',anh_blog='".$anh_blog."',tieude='".$tieude."',tacgia='".$tacgia."' WHERE id='$_GET[id]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_contact WHERE id = '$_GET[id]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['anh_blog']);
		}

	}else{
		$sql_update = "UPDATE tbl_contact SET noidung='".$noidung."',anh_blog='".$anh_blog."',tieude='".$tieude."',tacgia='".$tacgia."' WHERE id='$_GET[id]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlyblog&query=lietke');
}else{
	$id=$_GET['id'];
	$sql = "SELECT * FROM tbl_contact WHERE id = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['anh_blog']);
	}
	$sql_xoa = "DELETE FROM tbl_contact WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlyblog&query=lietke');
}

?>