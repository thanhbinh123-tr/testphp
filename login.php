<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JB Studio</title>
    <link rel="stylesheet" href="C:/Web_Desgin/Styles/JBStudio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <img class="logo" src="C:/Web_Desgin/Images/logo.jpg" alt="">
    <ul class="menu cf">
        <li><a href="C:/Web_Desgin/Html/Home/JBStudio.html">Home</a></li>
        <li><a href="C:/Web_Desgin/Html/Home/AboutUs.html">About Us</a></li>
        <li>
            <a href="">Catalogue</a>
            <ul class="submenu">
                <li><a href="C:/Web_Desgin/Html/Home/Catalogue/Ofice.html">Office</a></li>
                <li><a href="C:/Web_Desgin/Html/Home/Catalogue/YourHome.html">Your Home</a></li>
            </ul>
        </li>
        <li><a href="C:/Web_Desgin/Html/Home/Interior Design.html">Intetior Design</a></li>
        <li><a href="#">Login</a></li>
    </ul>
    <!--Login-->
    <div class="row">
        <div class="col-6">
            <h4>Login</h4>
            <form method="post" action="./includes/login.inc.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <a class="btn btn-primary" href="C:/Web_Desgin/Html/Home/JBStudio.html" role="button">Submit</a>
            </form>
        </div>
        <div class="col-6">
            <h4>Create Account</h4>
            <form method="post" action = "./includes/register.inc.php">
                <div class="form-group">
                    <label for="exampleInputName">Your Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputName" placeholder="Enter Your Name">
                    <label for="phonenumber">Phone number</label>
                    <input name="phonenumber" type="text" class="form-control" id="phonenum" placeholder="Phone Number">
                    <label for="address">Address</label>
                    <input name="address" type="text" class="form-control"  placeholder="Address">
                    <label for="exampleInputEmail1">Email </label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control"  placeholder="Password">
                    <label for="password-rp">Password Repeat</label>
                    <input name="password-rp" type="password" class="form-control"  placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary" name="registerBtn">Create</button>
            </form>
</body>

</html>
