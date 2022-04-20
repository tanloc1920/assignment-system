<?php
        session_start();
        if(!isset($_SESSION["username"]) ){
         header("location:login.php");
         }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Layout 1</title>
        <link rel="stylesheet" type="text/css" href="./Public/css/style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            var images = [
                "./Public/pic/KCNTT.jpg",
                "./Public/pic/slide11.jpg",
                "./Public/pic/slide12.jpg"
            ];
            var num = 0;

            function next() {
                var slider = document.getElementById("slider");
                num++;
                if(num >= images.length) {
                    num = 0;
                }
                slider.src = images[num];
            }

            function prev() {
                var slider = document.getElementById("slider");
                num--;
                if(num < 0) {
                    num = images.length-1;
                }
                slider.src = images[num];
            }
        </script>
    </head>
    <body>
        <div id="banner">
            <div id="info-nocss" style="padding: 20px">
                <div class="help">
                    <a id="hellouser"><?php
                        if(isset($_SESSION['username'])){
                            echo "Xin chào " . $_SESSION['username'];
                        }else{
                            echo "";
                        }
                        setcookie("username","",time()-60,"/","",0);
                    ?></a>
                    <a href="logout.php" style="color: aqua;">(Đăng xuất)</a>
                </div>
            </div>
            <div id="desktop">
                <a>Hệ thống quản lý giảng dạy</a>
            </div>
        </div>
        <div id="menu_top">
            <ul>
                <li><a href="Trangchu.php" title="TRANG CHỦ" class="active">TRANG CHỦ</a></li>
                <!-- <li><a href="#" title="THÔNG BÁO">THÔNG BÁO</a></li> -->
                <!-- <li><a href="#" title="TÀI LIỆU">TÀI LIỆU</a></li> -->
                <!-- <li><a href="#" title="HƯỚNG DẪN">HƯỚNG DẪN</a></li> -->
                <!-- <li><a href="#" title="HỎI ĐÁP">HỎI ĐÁP</a></li> -->
                <!-- <li><a href="#" title="LIÊN KẾT">LIÊN KẾT</a></li> -->
                <li><a href="indexLH.php" title="LIÊN HỆ">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="left">
                <div class="menu_left">
                    <h3>Danh mục quản lý</h3>
                    <ul>
                        <li><a href="giangday.php">Phân Công Giảng Dạy</a></li>
                        <li><a href="congtac.php">Phân Công Công Tác</a></li>
                        <li><a href="">Niên Luận Cơ Sở Ngành</a></li>
                        <li><a href="">Niên Luận Ngành</a></li>
                        <li>
                            <a href="">Luận Văn Tốt Nghiệp</a>
                            <ul class="sub-menu">
                                <li><a href="index3.php"><i class="fa fa-list-alt"></i> Danh Sách Các Đề Tài</a></li>
                                <li><a href="dangkydetai.php"><i class="fa fa-location-arrow"></i> Đăng Ký Đề Tài</a></li>
                                <li><a href="xulypc.php"><i class="fa fa-table"></i> Phân Giao Đề Tài</a></li>
                                <li><a href="#"><i class="fa fa-desktop"></i> Thực Hiện</a></li>
                                <li><a href="#"><i class="fa fa-balance-scale"></i> Thành Lập Hội Đổng</a></li>
                                <li><a href="#"><i class="fa fa-database"></i> Chấm Điểm</a></li>
                                <li><a href="#"><i class="fa fa-database"></i> Điểm</a></li>
                            </ul> 
                        </li>
                        <li><a href="">Tiểu Luận Tốt Nghiệp</a></li>
                        <li><a href="index2.php">Quản Lý Giáo Viên</a></li>
                        <li><a href="index.php">Quản Lý Sinh viên</a></li>
                        <li><a href="monhoc.php">Quản Lý Môn học</a></li>
                    </ul>
                </div>
            </div>
            <div id="right">
                <img id="slider" src="Public/pic/KCNTT.jpg" style="margin-left: 70px">
                <br>
                <center><button onclick="prev()"> Ảnh trước </button>
                <button onclick="next()"> Ảnh sau </button></center>
            </div>
        </div>
        <div id="footer">
        <marquee scrollamout="5" scrolldelay="120">Khoa Công Nghệ Thông Tin và Truyền Thông - Trường Đại học Cần Thơ, Khu 2 đường 3/2, P. Xuân Khánh , Q Ninh Kiều, TP Cần Thơ. Điện thoại: +84-0292-3831301. Fax: +84-0292-3830841</marquee>
        </div>
    </body>
</html>