<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account - Login/Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .account-container {
            margin-top: 60px;
        }
        .form-container {
            background: #fff;
            padding: 50px;
            border-radius: 16px;
            height: 500px;
            box-shadow: 0 0 100px rgba(0,0,0,0.05);
        }
        .form-btn span {
            cursor: pointer;
            margin-right: 20px;
            font-weight: 600;
            color: #333;
        }
        .form-btn hr {
            margin-top: 5px;
            height: 3px;
            border: none;
            background: #007bff;
            transition: transform 0.3s;
        }
        .form-container form {
            display: none;
            margin-top: 20px;
        }
        #LoginForm {
            display: block;
        }
        #Indicator {
            width: 10%;
            margin-left:0;
            margin-right:20px;
            border: none;
            height: 2px;
            background: #111111ff;
            transition: transform 0.5s;
            max-width: 100%;
        }
        .form-container input {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
        }
        .form-switcher {
            margin-bottom: 15px;
        }
        img {
            max-width: 100%;
        }
    </style>
</head>
<body>

    <div class="container account-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/image1.png') }}" alt="Chobi XD">
            </div>
            <div class="col-md-6">
                <div class="form-container">
                    <div class="form-btn d-flex form-switcher">
                        <span onclick="register()">Register</span>
                        <span onclick="login()">Login</span>
                    </div>
                    <hr id="Indicator">

                    <form id="LoginForm" method="GET" action="/users">
                        @csrf
                        <input type="text" name="uname" class="form-control" placeholder="Username">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <div class="text-end mt-2">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </form>

                    <form id="RegForm" method="POST" action="/users">
                        @csrf
                        <input type="text" name="uname" class="form-control" placeholder="Username">
                        <input type="text" name="email" class="form-control" placeholder="Email">
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile No.">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    const loginForm = document.getElementById("LoginForm");
    const regForm = document.getElementById("RegForm");
    const indicator = document.getElementById("Indicator");

    function login() {
        regForm.style.display = "none";
        loginForm.style.display = "block";
        indicator.style.transform = "translateX(100px)";
    }

    function register() {
        regForm.style.display = "block";
        loginForm.style.display = "none";
        indicator.style.transform = "translateX(0px)";
    }
</script>

</body>
</html>
