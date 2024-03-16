

<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/css/base.css">
    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/css/main.css">
    <link rel="preconnect"  type='text/css' href="https://fonts.googleapis.com">
    <link rel="preconnect"   type='text/css' href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" type='text/css'  href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/icon/fontawesome-free-6.5.1-web/css/all.min.css">

    <link rel="stylesheet"  type='text/css' href="http://localhost/PROJECTMYHOME/public/assets/icon/fontawesome-free-6.5.1-web/js/all.min.js">
</head>

<body>
    <div class="app">
        <header class="app__header">
            <div class="grid__full-width">

                <div class="header__nav-wrapper">
                    <div class="header__nav-logo">
                        <a href="" class="header__nav-logo-links">
                            <img src="http://localhost/PROJECTMYHOME/public/assets/image/logo-home.jpg" alt="" class="header__nav-logo-img">
                        </a>

                        <h4 class="header__nav-logo-title">My Family</h4>
                    </div>
                    <div class="header__nav-search">
                        <i class="header__nav-search-icon fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Tìm kiếm" class="header__nav-search-input">
                    </div>

                    <div class="header__nav-functions">
                        <button class="btn js-login">Đăng Nhập</button>
                        <button class="btn js-register">Đăng Ký</button>
                    </div>
                </div>
            </div>
        </header>

        <?php 
            require_once ''.__DIR_ROOT.'/mvc/views/page/'.$data['page'].'.php';
        ?>
       


        <footer class="footer__container">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__row-2-of-10">
                        <div class="infomation-contact">
                            <h3 class="infomation-contact-title">Mọi thông tin liên hệ bên dưới</h3>
                            <a class="infomation-contact-links" href="https://www.facebook.com/tienxyzit" target="_blank">facebook của tôi: <i class="fa-brands fa-facebook"></i></a>
                            <a class="infomation-contact-links" href="https://github.com/minhtienbukai501" target="_blank">github của tôi: <i class="fa-brands fa-github"></i></a>
                            <span class="infomation-contact-title">Được Thiết kế bởi Lê Minh Tiến</span>
                        </div>
                    </div>

                    <div class="grid__row-2-of-10">
                        <div class="infomation-contact">
                            <h3 class="infomation-contact-title">Thông tin về tôi</h3>
                            <span class="infomation-contact-title">Đại Học: Khoa Học Huế </span>
                            <span class="infomation-contact-title">Khoa: Công Nghệ Thông Tin </span>

                        </div>
                    </div>

                    <div class="grid__row-2-of-10">
                        <div class="infomation-contact">
                            <h3 class="infomation-contact-title">Nguyên Nhân vì sao trang web này được hình thành</h3>
                            <span class="infomation-contact-title">Đây là trang wed đầu tay của tôi</span>
                            <span class="infomation-contact-title">nên chưa có nhiều tính năng</span>
                            <span class="infomation-contact-title">nên trang web còn có nhiều thiếu sót</span>
                        </div>
                    </div>


                    <div class="grid__row-2-of-10">
                        <div class="infomation-contact">
                            <h3 class="infomation-contact-title">Công Nghệ được sủ dụng trong trang web</h3>
                            <span class="infomation-contact-title">Các ngôn ngữ được sử dụng trong trang web</span>
                            <span class="infomation-contact-title"><i class="footer-icon fa-solid fa-check"></i>html-css</span>
                            <span class="infomation-contact-title"><i class="footer-icon fa-solid fa-check"></i>javascript</span>
                            <span class="infomation-contact-title"><i class="footer-icon fa-solid fa-check"></i>php</span>
                            <span class="infomation-contact-title"><i class="footer-icon fa-solid fa-check"></i>Database- MySQL</span>
                        </div>
                    </div>

                    <div class="grid__row-2-of-10">
                        <div class="infomation-contact">
                            <h3 class="infomation-contact-title">Các Thông tin nên đọc</h3>
                            <a href="" class="infomation-contact-links" target="_blank">About Me</a>
                            <a href="" class="infomation-contact-links" target="_blank">Điều khoản</a>
                            <span class="infomation-contact-title">Được Thiết kế bởi Lê Minh Tiến</span>
                        </div>
                    </div>

                </div>

            </div>
        </footer>
    </div>

    <div class="app-modal">
        <div class="form-login">
            <div class="form-login-close">
                <i class="form-login-close-icon fa-solid fa-xmark"></i>
            </div>
            <header class="login__header">
                <div class="header-cotain-links">
                    <a href="#" class="login__home-links">
                        <img class="login__home-img" src="http://localhost/PROJECTMYHOME/public/assets/image/logo-home.jpg" alt="">
                    </a>
                </div>


                <h1 class="login__header-title">Chào mừng đến với wedsite của tôi</h1>
            </header>

            <div class="form-login__body">


                <label for="" class="form-login__user-title">
                    <i class="login__user-icon fa-solid fa-user"></i>
                    User
                </label>
                <input type="text" class="form-login__input" placeholder="Enter your account">
                <label for="" class="form-login__user-title mg__top-15">
                    <i class="login__password-icon fa-solid fa-key"></i>
                    Password
                </label>
                <input type="text" class="form-login__input" placeholder="Enter your password">
                <div class="form-login__body-advanted">
                    <div class="form-login__check">
                        <input type="checkbox" id="remember-password" class="form-login__body-remember-password">
                        <span>Remember password</span>
                    </div>


                    <a href="" class="form-login__forgot-link">Forgot pasword</a>
                </div>

                <button class="btn-login">LOGIN</button>
            </div>

            <footer class="login-form__footer">
                <p class='login-form__footer-create-account'>You need <a href="" class="form-create-user">help?</a></p>
            </footer>
        </div>
    </div>

    <div class="app-modal-register">
        <div class="form-register">
            <div class="form-login-close">
                <i class="form-login-close-icon fa-solid fa-xmark"></i>
            </div>

            <header class="register__header">
                <div class="header-cotain-links">
                    <a href="#" class="login__home-links">
                        <img class="login__home-img" src="./public/assets/image/logo-home.jpg" alt="">
                    </a>
                </div>


                <h1 class="register__header-title">Đăng ký tài khoản</h1>
            </header>

            <div class="register__body">
                <div class="register__body-name">
                    <div class="register__body-firstName">
                        <label for="" class="register-title">First Name</label>
                        <input type="text" class="register__body-input" placeholder="Enter FirstName" required>
                    </div>
                    <div class="register__body-lastName">
                        <label for="" class="register-title">Last Name</label>
                        <input type="text" class="register__body-input" placeholder="Enter LastName" required>
                    </div>
                </div>

                <label for="" class="register-title">Email</label>
                <input type="text" class="register__body-input" placeholder="Enter your Email" required>

                <label for="" class="register-title">User</label>
                <input type="text" class="register__body-input" placeholder="Enter your User" required>

                <label for="" class="register-title">Password</label>
                <input type="text" class="register__body-input" placeholder="Enter your password" required>

                <label for="" class="register-title">Repassword</label>
                <input type="text" class="register__body-input" placeholder="Enter your Repassword" required>
                <button class="btn__register">ĐĂNG KÝ</button>
            </div>

            <div class="register__footer">
                <p class='login-form__footer-create-account'>You need <a href="" class="form-create-user">help?</a></p>
            </div>
        </div>
    </div>

    <script src="http://localhost/PROJECTMYHOME/public/assets/js/main.js"></script>

</body>

</html>