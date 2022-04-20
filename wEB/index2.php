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
    </head>
    <body>
        <div id = "login-panel " class="hidden" style="overflow: hidden ; display: block;">
            <div title="Đóng" id="login-from-close"></div>
        </div>
        <div id="banner">
            <div id="info-nocss" style="padding: 20px">
            <div class="help">
                <a id="hellouser"><?php
                        if(isset($_SESSION['username'])){
                            echo "Xin chào " . $_SESSION['username'];
                        }else{
                            echo "";
                        }
                    ?></a>
                    <a href="logout.php" style="color: aqua;">(Đăng xuất)</a>
                </div>
            </div>
            <div id="desktop">
                <!-- <img src="./logodhct.png" alt=""> -->
                <a>Hệ thống quản lý phân công</a>
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
                            <a  id="nlcsn" href="" onclick="change()">Luận Văn Tốt Nghiệp</a>
                            <ul class="sub-menu">
                                <li><a href="index3.php"><i class="fa fa-list-alt"></i> Danh Sách Các Đề Tài</a></li>
                                <li><a href="dangkydetai.php"><i class="fa fa-location-arrow"></i> Đăng Ký Đề Tài</a></li>
                                <li><a href="#"><i class="fa fa-table"></i> Phân Giao Đề Tài</a></li>
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
                <table>
                    <thead>
                        <tr>
                            <th>MAGV</th>
                            <th>HỌ VÀ TÊN GV</th>
                            <th>BỘ MÔN</th>
                            <th>HỌC VỊ</th>
                            <th colspan="2">
                                TÙY CHỌN <button type="submit"><a href="editgv.php" style="text-decoration: none">Thêm</a></button>
                            </th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                            include "getDB_GV.php";
                            for($i=0;$i<count($arr);$i++){
                                $temp="";
                                $temp.="<tr>";
                                $temp.= "<td>".$arr[$i]["magv"]."</td>".
                                        "<td>".$arr[$i]["tengv"]."</td>".
                                        "<td>".$arr[$i]["bm"]."</td>".
                                        "<td>".$arr[$i]["cv"]."</td>".
                                        "<td></td>
                                        <td><button><a href='xoadbc.php?table=giaovien&field=MAGV&value=".$arr[$i]["magv"]."'>Xóa</a></button></td>";
                                $temp.="</tr>";
                                echo($temp);
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div id="footer">
        <marquee scrollamout="5" scrolldelay="120">Khoa Công Nghệ Thông Tin và Truyền Thông - Trường Đại học Cần Thơ, Khu 2 đường 3/2, P. Xuân Khánh , Q Ninh Kiều, TP Cần Thơ. Điện thoại: +84-0292-3831301. Fax: +84-0292-3830841</marquee>
        </div>
    </body>
</html>