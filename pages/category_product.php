
<div id="main-content-wp" class="category-product-page">
    <div class="section" id="breadcrumb-wp">
        <div class="wp-inner">
            <div class="section-detail clearfix">

                        <?php
                          // $cat = $_GET['id'];
                          $id = $_GET['id'];
                          include("config/dbconfig.php");
                          $sql = "SELECT * from tbl_category where id like '%$id%'";
                          $run = mysqli_query($conn, $sql);
                          $i = 0;
                          while ($row = mysqli_fetch_array($run)) {
                            $i++;
                        ;?>
                <h3 class="title fl-left"><?php echo $row['title']?></h3>
            <?php } ?>
                <ul class="list-breadcrumb fl-right">
                    <li>
                        <a href="?page=home" title="">Trang chủ</a>
                    </li>
                        <?php
                          // $cat = $_GET['id'];
                          $id = $_GET['id'];
                          include("config/dbconfig.php");
                          $sql = "SELECT * from tbl_category where id like '%$id%'";
                          $run = mysqli_query($conn, $sql);
                          $i = 0;
                          while ($row = mysqli_fetch_array($run)) {
                            $i++;
                        ;?>
                    <li>
                        <a title=""><?php echo $row['title']?></a>
                    </li><?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="section" id="filter-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <li>
                        <form method="POST" action="">
                            <select name="filter-price">
                                <option value="0">Lọc theo giá</option>
                                <option value="0">500.000đ - 2.000.000đ</option>
                                <option value="0">2.000.000đ - 5.000.000đ</option>
                                <option value="0">5.000.000đ - 10.000.000đ</option>
                                <option value="0">Trên 10.000.000đ</option>
                            </select>
                            <button type="submit" name="btn-filter-price" id="btn-filter-price">Lọc</button>
                        </form>
                    </li>
                    <li>
                        <form method="POST" action="" id="form-s-product">
                            <input type="text" name="s-product" id="s-product" placeholder="Tìm kiếm">
                            <button type="submit" name="btn-s-product" id="btn-s-product"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section" id="list-product-wp">
        <div class="wp-inner">
            <div class="section-detail">
                <ul class="list-item clearfix">
                    <?php
                      // $cat = $_GET['id'];
                      $id = $_GET['id'];
                      include("config/dbconfig.php");
                      $sql = "SELECT * from tbl_product where category like '%$id%'";
                      $run = mysqli_query($conn, $sql);
                      $i = 0;
                      while ($row = mysqli_fetch_array($run)) {
                        $i++;
                    ;?>
                    <li>
                        <a href="" title="" class="thumb">
                            <img src="index.php/../images/product/<?php echo $row['image']?>" alt="">
                        </a>
                        <div class="info">
                            <a href="" title="" class="name-product"><?php echo $row['name']?></a>
                            <div class="price-wp">
                                <span class="new"><?php echo $row['price']?></span>
                                <span class="old"><?php echo $row['price']?></span>
                            </div>
                            <a href="" title="" class="buy-now">Mua ngay</a>
                        </div>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="section" id="pagination-wp">
        <div class="wp-inner">
            <div class="pagination">
                <strong>1</strong>
                <a href="" title="">2</a>
                <a href="" title>3</a>
                <a href="">&gt;</a>                    
            </div>
        </div>
    </div>
</div>