<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Focus AdminV: Widget</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <!-- Styles -->
    <link href="AdminV/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="AdminV/css/lib/themify-icons.css" rel="stylesheet">
    <link href="AdminV/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="AdminV/css/lib/helper.css" rel="stylesheet">
    <link href="AdminV/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <!-- <div class="login-logo">
                            <a href="index.html"><span>Focus</span></a>
                        </div> -->
                        <div class="login-form">
                            <h4>Login</h4>
                            <form method="post" action="/login">
                                <?php echo csrf_field(); ?>
                                <?php if(session()->has('FailMK')): ?>
                                <p class="alert alert-danger"><?php echo e(session()->get('FailMK')); ?></p>
                                <?php elseif(session()->has('FailTK')): ?>
                                <p class="alert alert-danger"><?php echo e(session()->get('FailTK')); ?></p>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>
                                    <label class="pull-right">
										<a href="#">Forgotten Password?</a>
									</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                <!-- <div class="social-login-content">
                                    <div class="social-button">
                                        <button type="button" class="btn btn-primary bg-facebook btn-flat btn-addon m-b-10"><i class="ti-facebook"></i>Sign in with facebook</button>
                                        <button type="button" class="btn btn-primary bg-twitter btn-flat btn-addon m-t-10"><i class="ti-twitter"></i>Sign in with twitter</button>
                                    </div>
                                </div> -->
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="/register"> Sign Up Here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html><?php /**PATH D:\Đại học\HK1_ Năm 4\Đồ án chuyên ngành\Lavarel\lavarel-app\resources\views/Login/page-login.blade.php ENDPATH**/ ?>