<!-- <p>Thêm danh mục sản phẩm</p> -->
<!-- <table border="1" width="50%" style="border-collapse: collapse;">
 <form class="row g-3" method="POST" action="modules/quanlydanhmucsp/xuly.php">
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Tên danh mục</label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" name="tendanhmuc" value="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="themdanhmuc">Thêm danh mục sản phẩm</button>
  </div>
</form>
</table> -->

<!-- <form class="row g-3" method="POST" action="modules/quanlydanhmucsp/xuly.php">
  <div class="col-auto">
  <label>Tên danh mục</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" id="inputPassword2" placeholder="nhập vào danh mục mới" name="tendanhmuc">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3" name="themdanhmuc">Thêm danh mục sản phẩm</button>
  </div>
</form> -->

<p>Thêm danh mục sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlydanhmucsp/xuly.php">
	  <tr>
	  	<td>Tên danh mục</td>
	  	<td><input type="text" name="tendanhmuc"></td>
      <td><button type="button" class="btn btn-primary btn-sm" name="themdanhmuc">Thêm danh mục sản phẩm</button></td>
	  </tr>
	  <!-- <tr>
	    <td>Thứ tự</td>
	    <td><input type="text" name="thutu"></td>
	  </tr> -->
	  
 </form>
</table>