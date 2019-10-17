
<?php
require("../mysqli_connect.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mua online các mặt hàng bách hóa giá tốt </title>
    <link rel="icon" sizes="192x192" href="../Image/178f6b924bbee8befb5cf61c9a17a12e.png">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <script src="../JavaScrips.js"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <div class="top-bar"></div>
    <header>
        <div class="header__promo">
            <div class="container">
                <ul class="top-promo__wrap">
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon tiki-assistant"></i>Trợ lý Tiki
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon icon-uu-dai-hop-tac"></i>Ưu đãi đối tác
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon icon-booking_dot_com"></i>Đặt khách sạn
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon icon-gotadi"></i>Đặt vé máy bay
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon icon-clearance-sale"></i>Săn hàng tồn
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon ico-fire"></i>Khuyến Mãi HOT
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon icon-global-18"></i>Hàng quốc tế
                        </a>
                    </li>
                    <li class="top-promo__item">
                        <a href="#" class="top-promo__link">
                            <i class="tikicon icon-money_bag"></i>
                            Bán hàng cùng Tiki
                            <i class="tikicon icon-arrow-down"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__form">
            <div class="container">
                <div class="header__form-wrap">
                    <a href="#" class="header__logo">
                        <i class="tikicon icon-tiki_short"></i>
                    </a>
                    <a href="#" class="header__flash-sale">
                        <img src="../img/tikinow.png" alt="">
                    </a>
                    <div class="form-search">
                        <form action="" id="search-from" method="get">
                            <div class="input">
                                <input type="text" name="q" autocomplete="off" placeholder="Tìm sản phẩm, danh mục hay thương hiệu mong muốn ...">
                            </div>
                            <button class="submit">
                                <i class="tikicon icon-search"></i>
                                <span>Tìm kiếm</span>
                            </button>
                        </form>
                    </div>
                    <div class="header__link">
                        <a href="#" class="header-link__item-tracking">
                            <i class="tikicon icon-tracking"></i>
                            <span>Theo dõi <br> đơn hàng</span>
                        </a>
                        <a href="#" class="header-link__item-notifi">
                            <i class="tikicon tikicon icon-notification"></i>
                            <span>Thông báo <br> của tôi</span>
                        </a>
                        <span href="#" class="header-link__item-icon-user">
                            <i class="tikicon tikicon icon-user"></i>
                            <span class="ml-2">
                                <h3 class="text-center"><a href="../Login/login.php">
                                        <?php
                                        if (isset($_SESSION["email"])) {
                                            echo "Xin chào<br/>" . $_SESSION["last_name"] . " " . $_SESSION["first_name"] . "";
                                        } else {
                                            echo "Đăng nhập<br/><small>Tài khoản</small>";
                                        } ?></a></h3>
                            </span>

                        </span>
                        <a href="#" class="header__cart-btn">
                            <i class="tikicon icon-cart"></i>
                            Giỏ hàng
                            <span class="cart-count">1</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__nav">
            <div class="container">
                <nav class="header__nav-main">
                    <i class="tikicon icon-burger-menu"></i>
                    <span class="long">DANH MỤC SẢN PHẨM</span>
                </nav>
                <a href="#" class="feature header__nav-location-picker">
                    <span class="tikicon icon-location-picker"></span>
                    Bạn muốn giao hàng tới đâu?
                </a>
                <a href="#" class="feature header__nav-recently">
                    <span class="tikicon icon-arrow-down"></span>
                    Sản phẩm bạn đã xem
                </a>
                <a href="#" class="feature header__nav-delivery-2h">
                    <i class="tikicon icon-tikinow"></i>
                    <span>
                        TikiNOW giao nhanh <br>
                        Hàng trăm nghìn sản phẩm
                    </span>
                </a>
                <a href="#" class="feature header__nav-return">
                    <span class="tikicon icon-exclusive"></span>
                    <span>
                        Tất cả sản phẩm <br>
                        100% chính hiệu
                    </span>
                </a>
                <a href="#" class="feature header__nav-delivery-2h">
                    <span class="tikicon icon-return"></span>
                    30 ngày đổi trả dễ dàng
                </a>
            </div>
        </div>
    </header>
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="#">
                        Trang chủ
                    </a>
                </li>
                <li>
                    <span>
                        Bách Hóa Online
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="tiki-deal-header">
                <div class="title"> Bách Hóa Online: 21771 kết quả</div>
            </div>
            <div class="content__wrap">
                <aside>
                    <div class="panel__wrap">
                        <div class="panel">
                            <div class="panel__heading">
                                <h4>Danh Mục Sản Phẩm</h4>
                            </div>
                            <div class="panel__category">
                                <div class="panel__category-list">
                                    <div class="panel__category-item panel__category-title">
                                        <a href="">Bách Hóa Online</a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Chăm sóc nhà cửa
                                            <span>(3032)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Bánh kẹo
                                            <span>(1927)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Thực phẩm
                                            <span>(4419)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Đồ uống - Giải khát
                                            <span>(1395)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Gia vị
                                            <span>(1702)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Chăm sóc thú cưng
                                            <span>(5154)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Bộ quà tặng
                                            <span>(97)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Thực phẩm chay
                                            <span>(56)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Thực phẩm bổ dưỡng
                                            <span>(865)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Thực phẩm bảo vệ sức khỏe
                                            <span>(207)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Thực phẩm cao cấp
                                            <span>(127)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Thực phẩm hữu cơ
                                            <span>(189)</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel__heading">
                                <h4>Sản phẩm được giao từ</h4>
                            </div>
                            <div class="panel__category">
                                <div class="panel__category-list">
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Trong nước
                                            <span>(20506)</span>
                                        </a>
                                    </div>
                                    <div class="panel__category-item panel__category-child">
                                        <a href="">
                                            Nước ngoài
                                            <span>(1095)</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="products">
                    <div class="products__filter">
                        <div class="products__filter-option-wrap">
                            <div class="products__filter-option-left">
                                <span>Ưu tiên xem: </span>
                                <ul class="products__filter-option">
                                    <li>
                                        <a href="">HÀNG MỚI</a>
                                    </li>
                                    <li>
                                        <a href="">BÁN CHẠY</a>
                                    </li>
                                    <li>
                                        <a href="">GIẢM GIÁ NHIỀU</a>
                                    </li>
                                    <li>
                                        <a href="">GIÁ THẤP</a>
                                    </li>
                                    <li>
                                        <a href="">GIÁ CAO</a>
                                    </li>
                                    <li>
                                        <a href="">CHỌN LỌC</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="products__filter-option-right">
                                <form action="" method="get">
                                    <input type="text" name="q" id="search-product" placeholder="Tìm trong Bách Hoá Online">
                                    <button>Tìm kiếm</button>
                                </form>
                            </div>
                        </div>

                        <div class="products__wrap">
                            <?php
                            $query = $conn->query("SELECT * FROM products");
                            if ($query->num_rows > 0) {
                                while ($row = $query->fetch_assoc()) {
                                    ?>
                                    
                                    <div class="product">
                                        <a href="">
                                            <div class="product__image">
                                                <img src="../<?php echo  $row["products_img"] ?>" alt="">
                                            </div>
                                            <div class="product__title">
                                                <i class="icon icon-tikinow"></i>
                                                <?php echo $row["products_name"]  ?>
                                            </div>
                                            <span class="product__sale">
                                                <span class="product__sale-final">
                                                    <?php echo  $row["products_price"]  ?>
                                                    <span class="product__sale-percent">
                                                        -10%
                                                    </span>
                                                <!-- </span>
                                                <span class="product__sale-regular">3.990.000 ₫</span>
                                            </span> -->
                                            
                                            <div class="product__review">
                                                <div class="product__review-start">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <span class="product__review-start-y">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                                <div class="product__review-text">(252 nhận xét)</div>
                                            </div>
                                        </a>
                                    </div>
                                <?php }
                        } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer">
            <div class="container">
                <div class="wraper">
                    <i class="tikiNew-icon"></i>
                    <div class="tikiNews">
                        <h3>Đăng ký nhận bảng tin Tiki</h3>
                        <h5>Đừng bỏ lỡ ngàn sản phẩm và chương trình siêu hấp dẫn</h5>
                    </div>
                    <div class="form-control flex">
                        <div class="mc-field-group">
                            <input type="email" placeholder="Địa chỉ email của bạn" class="tiki-home-email" id="mce-EMAIL">
                        </div>
                        <div>
                            <button class="btn-News">Đăng ký</button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="footer-an container">
            <div class="footer-nav">
                <h4>Hỗ trợ khách hàng</h4>
                <br>
                <p class="hotline-number">Hotline đặt hàng: 1800-6963</p>
                <small>(Miễn phí, 8-21h kể cả T7, CN)</small>
                <br>
                <br>
                <p class="hotline-number">Hotline chăm sóc khách hàng: 1900-6035</p>
                <small>(1000đ/phút, 8-21h kể cả T7, CN)</small>
                <br>
                <br>
                <a href="#" class="footer-link">Câu hỏi thường gặp</a>
                <a href="#" class="footer-link">Gửi yêu cầu hỗ trợ</a>
                <a href="#" class="footer-link">Hướng dẫn đặt hàng</a>
                <a href="#" class="footer-link">Phương thức vận chuyển</a>
                <a href="#" class="footer-link">Chính sách đổi trả</a>
                <a href="#" class="footer-link">Hướng dẫn mua trả góp </a>
                <a href="#" class="footer-link">Chính sách hàng nhập khẩu </a>
                <a href="#" class="footer-link">Hỗ trợ khách hàng: support@tiki.vn </a>
                <a href="#" class="footer-link">Báo lỗi bảo mật: security@tiki.vn </a>
            </div>
            <div class="footer-nav">
                <h4>Về Tiki</h4>
                <br>
                <a href="#" class="footer-link">Giới thiệu Tiki</a>
                <a href="#" class="footer-link">Tuyển Dụng</a>
                <a href="#" class="footer-link">Chính sách bảo mật thanh toán</a>
                <a href="#" class="footer-link">Chinhs sacsh bảo mật thông tin cá nhân</a>
                <a href="#" class="footer-link">Chính sách giải quyết khiếu nại</a>
                <a href="#" class="footer-link">Điều khoản sử dụng</a>
                <a href="#" class="footer-link">Hội sách Online </a>
                <a href="#" class="footer-link">Giới thiệu Tiki Xu </a>
                <a href="#" class="footer-link">Tiki Tư Vấn </a>
                <a href="#" class="footer-link">Bán hàng doanh nghiệp </a>
            </div>
            <div class="footer-nav">
                <h4>Hợp tác và liên kết</h4>
                <br>
                <a href="#" class="footer-link">Quy chế hoạt động Sàn GDTMĐT</a>
                <a href="#" class="footer-link">Bán hàng cùng Tiki</a>
            </div>
            <div class="footer-nav">
                <h4>Phương thức thanh toán</h4>
                <br>
                <i class="tiki-icon-pay visa"></i>
                <i class="tiki-icon-pay master-card"></i>
                <i class="tiki-icon-pay jbc"></i>
                <i class="tiki-icon-pay cash"></i>
                <i class="tiki-icon-pay banking"></i>
                <i class="tiki-icon-pay installment"></i>
            </div>
            <div class="footer-nav">
                <h4>Kết nối cùng chúng tôi</h4>
                <br>
                <i class="tiki-icon-pay icon-fb"></i>
                <i class="tiki-icon-pay icon-yt"></i>
                <i class="tiki-icon-pay icon-zl"></i>
                <br>
                <br>
                <br>
                <br><br>
                <h4>
                    Tải ứng dụng trên điện thoại
                </h4>
                <br>
                <i class="tiki-icon-pay ios"></i>
                <i class="tiki-icon-pay adroi"></i>
            </div>
        </div>
        <br><br>
        <hr>
        <br><br>
        <div class="btm-footer container">
            <div class="btm left">
                <i class="tiki-icon-pay loaction"></i>
                <p><b>Địa chỉ văn phòng</b>: 52 Út Tịch, phường 4, quận Tân Bình, thành phố Hồ Chí Minh</p>
                <p class="loction-content">Tiki nhận đặt hàng trực tuyến và giao hàng tận nơi, chưa hỗ trợ mua và nhận
                    hàng
                    trực tiếp tại văn phòng hoặc trung tâm xử lý đơn hàng</p>
            </div>

            <div class="btm right">
                <p><b>Địa chỉ gửi hàng đổi/trả/bảo hành:</b> Trung tâm xử lý đơn hàng TIKI - Hẻm số 717, đường Tân Sơn,
                    Phường 12, Quận Gò Vấp, TP. Hồ Chí Minh</p>
                <p class="loction-content">
                    (Tham khảo <a href="#">hướng dẫn đổi, trả, bảo hành</a> hoặc liên hệ 1900-6035 để được hướng dẫn
                    thêm)
                </p>
            </div>
        </div>
        <br><br>
        <div class="btm-footer container">
            <div class="left-t">
                <p><b>© 2016 - Bản quyền của Công Ty Cổ Phần Ti Ki - Tiki.vn</b></p>
                <p class="loction-content">Giấy chứng nhận Đăng ký Kinh doanh số 0309532909 do Sở Kế hoạch và Đầu tư
                    Thành phố Hồ Chí Minh cấp ngày 06/01/2010</p>
            </div>
            <div class="Notarized">
                <div class="gg">
                    <img src="../img/61406254_393473474582736_2399746052459593728_n.png" height="36px" alt="ok" class="kk">
                    <i class="tiki-icon-pay ok"></i>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>