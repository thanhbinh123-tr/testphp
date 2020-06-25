<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>JB Studio</title>
    <link rel="stylesheet" href="C:/Web_Desgin/Styles/JBStudio.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>



</head>

<body>

    <div id="content-wrapper">
        <div class="container">
            <div class="col-md-2">
                <div class="nenxanh"></div>
            </div>
            <div class="col-md-8">
                <div class="nenhong"></div>
                <ul class="menu cf">
                    <li><a href="C:\Web_Desgin\Html\Home/JBStudio.html">Home</a></li>
                    <li><a href="C:\Web_Desgin\Html\Home/AboutUs.html">About Us</a></li>
                    <li>
                        <a href="">Catalogue</a>
                        <ul class="submenu">
                            <li><a href="C:/Web_Desgin/Html/Home/Catalogue/YourHome.html">Your Home</a></li>
                            <li><a href="C:/Web_Desgin/Html/Home/Catalogue/Ofice.html">Office</a></li>
                        </ul>
                    </li>
                    <li><a href="C:\Web_Desgin\Html\Home/Interior Design.html">Intetior Design</a></li>
                    <li><a href="C:\Web_Desgin\Html\Home/login.html">Login</a></li>
                </ul>
                <div class="col-md-2">
                    <div class="nenxanh"></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="background-carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item" style="background-image:url(http://thietkenoithatangel.com/dtool/data/computer/web765/thiet-ke-noi-that-bang-be-tong-cho-cac-khong-gian-phong-khach-phan-2-3.jpg)"></div>
                <div class="item active left" style="background-image:url(http://www.noithatqi.vn/uploads/29-05-2018/khach-1-modern-29-05-2018-d8f0v.png)"></div>
                <div class="item next left" style="background-image:url(https://donggia.vn/wp-content/uploads/2018/12/mau-thiet-ke-noi-that-phong-khach-biet-thu-dep-2.jpg)"></div>
            </div>
        </div>
    </div>


    <div class="navButton" id="previous">&#10094;</div>
    <div class="navButton" id="next">&#10095;</div>
    <script>
        $(document).ready(function() {
            $('#myCarousel').carousel({
                pause: 'none'
            })
        });
    </script>
</body>

</html>