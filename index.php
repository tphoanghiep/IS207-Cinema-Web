<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" type="text/css" href="index.scss">
    <link rel="stylesheet" type="text/css" href="./pages/trangchu/trangchu.scss">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="isActive.js" type="text/javascript" async></script>
    <script src="./pages/trangchu/isShow.js" type="text/javascript" async></script>
    <title>Document</title>
    
</head>

<body>
    <header class="header">
        <div class="promo">
            <div class="new">New</div>
            <div>Đăng ký thành viên để hưởng ưu đãi <i>đồng giá 59k</i> cho mọi xuất chiếu.<a class="anchor" href="#"> Xem thêm</a></div>
        </div>
        <div class="nav-bar">
            <div class="remain"></div>
            <nav class="switch">
                <a class="a-sw" href="index.php?page_layout=trangchu">Trang chủ</a>
                <a class="a-sw" href="index.php?page_layout=dangcongchieu">Đang công chiếu</a>
                <a class="a-sw" href="index.php?page_layout=sapchieu">Sắp chiếu</a>
                <a class="a-sw" href="index.php?page_layout=cumrap">Cụm rạp</a>
                <a class="a-sw" href="index.php?page_layout=uudai">Ưu đãi</a>
            </nav>
            <div class="remain sign-box">
                <div class="signup-box">Đăng ký</div>
                <div class="signin-box">Đăng nhập</div>
            </div>
        </div>
    </header>
    <?php
    if (isset($_GET["page_layout"])) {
        switch ($_GET["page_layout"]) {
            case "trangchu";
                include "./pages/trangchu/trangchu.php";
                break;

            case "dangcongchieu";
                include "./pages/dangcongchieu/dangcongchieu.php";
                break;

            case "sapchieu";
                include "./pages/sapchieu/sapchieu.php";
                break;
                
            case "cumrap";
                include "./pages/cumrap/cumrap.php";
                break;

            case "uudai";
                include "./pages/uudai/uudai.php";
                break;
        }
    }
    ?>
    <footer></footer>
</body>
</html>