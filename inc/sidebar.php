<style>.sub_cat_box {display: none;}
.ulcon {
  list-style-type: none;
}
</style>

<div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-1.jpg">
      <div class="logo"><a href="index.php" class="simple-text logo-normal">
          admin
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p>Trang chủ</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>Hồ sơ</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="qlth.php">
              <i class="material-icons">content_paste</i>
              <p>Quản lý thương hiệu</p>
            </a>
            
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="javascript: toggleChildren('cat1');">
              <i class="material-icons">content_paste</i>
              <p>Quản lý sản phẩm</p>
            </a>
            <div class="sub_cat_box"  id="cat1">
            <ul class ="ulcon">
            <li class="nav-item ">
            <a class="nav-link" href="DSSP.php">
              <i class="material-icons">content_paste</i>
              <p>Danh sách sản phẩm</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="themsp.php">
              <i class="material-icons">content_paste</i>
              <p>Thêm sản phẩm</p>
            </a>
          </li>
            </ul>
            </div>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="javascript: toggleChildren('cat2');">
              <i class="material-icons">library_books</i>
              <p>Quản lý khách hàng</p>
            </a>
            <div class="sub_cat_box"  id="cat2">
            <ul class ="ulcon">
            <li class="nav-item ">
            <a class="nav-link" href="QLKH.php">
              <i class="material-icons">library_books</i>
              <p>Danh sách khách hàng</p>
            </a> </li>
            <li class="nav-item ">
            <a class="nav-link" href="themkh.php">
              <i class="material-icons">library_books</i>
              <p>Thêm khách hàng</p>
            </a> </li>
            </ul>
            </div>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="javascript: toggleChildren('cat3');">
              <i class="material-icons">bubble_chart</i>
              <p>Quản lý đơn hàng</p>
            </a>
            <div class="sub_cat_box"  id="cat3">
            <ul class ="ulcon">
            <li class="nav-item ">
            <a class="nav-link" href="QLDH.php">
              <i class="material-icons">bubble_chart</i>
              <p>Danh sách đơn hàng</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="themhd.php">
              <i class="material-icons">bubble_chart</i>
              <p>Thêm đơn hàng</p>
            </a>
          </li>
            </ul>
            </div>
          </li>

        </ul>
      </div>
    </div>