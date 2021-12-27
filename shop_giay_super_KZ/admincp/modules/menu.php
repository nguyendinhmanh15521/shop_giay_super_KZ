
<!-- <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý danh mục bài viết</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></a>
  </li>
  <li  class="nav-item"><a class="nav-link" href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i> Đăng xuất : <?php if(isset($_SESSION['dangnhap']))
	{
		echo $_SESSION['dangnhap'];
	} ?></a>
  </li>
</ul> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <!-- <a class="nav-link active" aria-current="page" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a> -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlysp&query=them">Quản lý sản phẩm</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlyblog&query=lietke">Quản lý bài viết</a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a>
        </li> -->
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-success" type="submit"><a class="nav-link" href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i> Đăng xuất : <?php if(isset($_SESSION['dangnhap']))
	{
		echo $_SESSION['dangnhap'];
	} ?></a></button>
      </form>
    </div>
  </div>
</nav>