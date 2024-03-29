<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JB Studio</title>
    <link rel="stylesheet" href="./Styles/JBStudio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#myCarousel').carousel({
                pause: 'none'
            })
        });
    </script>


</head>

<body>
    <div id="content-wrapper">
        <div class="container">
            <div class="col-md-2">
                <div class="nenxanh"></div>
            </div>
            <div class="col-md-8">
                <div class="nenhong"></div>
                
                    <?php
                        if($_SESSION['logged']){
                            echo ' <form method="post" action="./includes/logout.inc.php">
                            <ul class="menu cf">
                    <li><a href="./JBStudio.php" data-ajax="false">Home</a></li>
                    <li><a href="./AboutUs.php" data-ajax="false">About Us</a></li>
                    <li>
                        <a href="">Catalogue</a>
                        <ul class="submenu">
                            <li><a href="./Catalogue/YourHome.php" data-ajax="false">Your Home</a></li>
                            <li><a href="./Catalogue/Ofice.php" data-ajax="false">Office</a></li>
                        </ul>
                    </li>
                    <li><a href="./Interior Design.php">Intetior Design</a></li>
                    <li><a type="button" href="./includes/logout.inc.php" name="logoutBtn">Logout</a></li>
                    
                             </form>
                             ';
                        }
                        else{
                            echo '<ul class="menu cf">
                            <li><a href="./JBStudio.php" data-ajax="false">Home</a></li>
                            <li><a href="./AboutUs.php" data-ajax="false">About Us</a></li>
                            <li>
                                <a href="">Catalogue</a>
                                <ul class="submenu">
                                    <li><a href="./Catalogue/YourHome.php" data-ajax="false">Your Home</a></li>
                                    <li><a href="./Catalogue/Ofice.php" data-ajax="false">Office</a></li>
                                </ul>
                            </li>
                            <li><a href="./Interior Design.php">Intetior Design</a></li>
                            <li><a href="./login.php" data-ajax="false">Login</a></li>
                            
                                     </form>
                            ';
                        }
                    ?>
                   
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
    
</body>

</html>
