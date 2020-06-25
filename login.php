<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JB Studio</title>
    <link rel="stylesheet" href="./Styles/JBStudio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <img class="logo" src="./Images/logo.jpg" alt="">
    <ul class="menu cf">
        <li><a href="./index.php" data-ajax="false">Home</a></li>
        <li><a href="./AboutUs.php" data-ajax="false">About Us</a></li>
        <li>
            <a href="">Catalogue</a>
            <ul class="submenu">
                <li><a href="./Catalogue/Ofice.html" data-ajax="false">Office</a></li>
                <li><a href="./Catalogue/YourHome.html" data-ajax="false">Your Home</a></li>
            </ul>
        </li>
        <li><a href="./Interior Design.php" data-ajax="false">Intetior Design</a></li>
        <li><a href="#">Login</a></li>
    </ul>
    <!--Login-->
    <div class="row">
        <div class="col-6">
            <h4>Login</h4>
            <form method="post" action="./includes/login.inc.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input name="lgid" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter usernameid">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="lgpwd" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="loginBtn">Submit</button>
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
