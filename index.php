<!DOCTYPE html>
<html>

<head>
    <title>Sign In - Sign Up</title>

    <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <script src="./script/check.js"></script>

</head>

<body>
    <div class="container">
        <div class="form-container">
            <div class="signin-signup">
                <form action="submit.php" method = post class="sign-in-form">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" autofocus name='uname'>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="p-sign-in" type="password" placeholder="password" name='passw'>
                    </div>
                    <div class="show_pass">
                        <input type="checkbox" onclick="check_sign_in_pass()">
                        <p>Show Password</p>
                    </div>


                    <input type="submit" value="Login" class="btn solid">

                    <p class="social-text">Or Sign in with social platform</p>

                    <div class="social">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="social-icon">

                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">

                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="social-icon">

                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>


                <form action="submit1.php" method=post class="sign-up-form">

                    <h2 class="title">Sign Up</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="username" name='un'>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="email" name='em' required>
                    </div>

                    <div class="input-field">
                        <i class="far fa-calendar"></i>
                        <input type="date" name='date'>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="p-sign-up" type="password" placeholder="password" name='pw'>
                    </div>

                    <div class="show_pass">
                        <input type="checkbox" onclick="check_sign_up_pass()">
                        <p>Show Password</p>
                    </div>

                    <input type="submit" value="Sign Up" class="btn solid">

                    <p class="social-text">Or Sign up with social platform</p>

                    <div class="social">
                        <a href="" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="social-icon">

                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="social-icon">

                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="social-icon">

                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New Here ?</h3>
                    <p>Welcome to ABC sports, Sign up to to get notified for the upcoming sports news. Also get chances to win exciting hampers by participating in quiz.</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>

                <img src="./img/undraw_grand_slam_-0-q5r.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>Sign in to get to know upcoming sports news.</p>
                    <button class="btn transparent" id="sign-in-btn">Sign In</button>
                </div>

                <img src="./img/undraw_goal_-0-v5v.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src='./script/add.js'></script>
</body>

</html>