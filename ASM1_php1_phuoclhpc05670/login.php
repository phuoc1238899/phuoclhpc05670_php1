<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FOOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="login_form_inner">
                        <h3>Đăng nhập</h3>
                        <form class="row login_form" action="" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" required id="name" name="username" placeholder="Nhập Họ Tên" placeholder='Username'>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" required id="name" name="email" placeholder="Nhập Email" placeholder='Email'>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" required id="name" name="password" placeholder="Nhập Password" placeholder='Password'>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Luôn Đăng Nhập</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" name="login" class="primary-btn">Đăng nhập</button>
                                <a href="register.php">Đăng kí</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>