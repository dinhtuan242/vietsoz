<?php
    // Kết nối đến CSDL
    include("../config/dbconfig.php");
?>
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="?page=add_product" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Thêm sản phẩm</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="pages/add_product_perform.php" enctype="multipart/form-data">
                        <label for="product-name">Tên sản phẩm</label>
                        <input type="text" name="name" id="name">
                        <label for="product-code">Mã sản phẩm</label>
                        <input type="text" name="masp" id="masp">
                        <label for="price">Giá sản phẩm</label>
                        <input type="text" name="price" id="price">
                        <!-- <label for="desc">Mô tả ngắn</label>
                        <textarea name="desc" id="desc"></textarea>
                        <label for="desc">Chi tiết</label>
                        <textarea name="desc" id="desc"></textarea> -->
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="image" id="upload-thumb"><!-- 
                            <input type="submit" name="btn-upload-thumb" value="Upload" id="btn-upload-thumb">
                            <img src="public/images/img-thumb.png"> -->
                        </div>
                        <label>Danh mục sản phẩm</label>
                        <select name="category">
                                <?php              
                                //Hiển thị các dữ liệu trong bảng tbl_tl_sach ra đây
                                $sql = "select * from tbl_category";
                                $run= mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_array($run)) {
                                ;?>
                                    <option value="<?php echo $row["id"];?>"><?php echo $row["title"];?></option>
                                <?php
                                }
                                ;?>
                        </select>
                        <!-- <label>Trạng thái</label>
                        <select name="status">
                            <option value="0">-- Chọn danh mục --</option>
                            <option value="1">Chờ duyệt</option>
                            <option value="2">Đã đăng</option>
                        </select> -->
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>