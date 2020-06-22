<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Chosen Select CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-chosen.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Data Tables CSS -->
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>

<?php if(auth()->guard()->guest()): ?>
<body>
    <!-- Awal NAVBAR not authenticated -->
        <!-- NAVBAR MENU -->
    <nav class="navbar sticky-top navbar-expand-sm bg navbar" style="background-color: #ffffff;">
        <a class="navbar-brand" href="">
            <img src="<?php echo e(asset('img/logo-indogetjob.svg')); ?>" height="45" alt="" loading="lazy" style="margin-left:10px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <div class="btn-group btn-group-lg">
            <!-- Register -->
            <?php if(Route::has('register')): ?>
                <a class="btn btn-outline-success" style="margin-right:25px; border-radius: 10px 10px 10px 10px;" href="<?php echo e(route('register')); ?>">DAFTAR</a>
            <?php endif; ?>
            <!-- Login -->
                <a class="btn btn-outline-primary"style="margin-right:10px; border-radius: 10px 10px 10px 10px;" href="<?php echo e(route('login')); ?>">MASUK</a>
            </div>
        </div>
    </nav>
    <!-- Akhir NAVBAR not authenticated -->

    <!-- Awal CONTENT -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Akhir CONTENT -->
</body>
<?php else: ?>

<body>
    <!-- Awal NAVBAR not authenticated -->
        <!-- NAVBAR MENU -->
        <nav class="navbar sticky-top navbar-expand-sm bg navbar" style="background-color: #ffffff;">
        <a class="navbar-brand" href="">
            <img src="<?php echo e(asset('img/logo-indogetjob.svg')); ?>" height="45" alt="" loading="lazy" style="margin-left:10px;">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <span class="navbar-brand mb-0 h1"><?php echo e(Auth::user()->name); ?></span>
            <img src="<?php echo e(asset('img/profil.svg')); ?>" height="45" alt="" loading="lazy" style="padding-left:10px; margin-right:10px;">
            <a class="btn btn-danger btn-sm" href="<?php echo e(route('logout')); ?>" role="button" style="margin-right:10px;">Logout</a>
        </div>
    </nav>
    <!-- Akhir NAVBAR not authenticated -->

    <!-- Awal CONTENT -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- Akhir CONTENT -->
    <?php endif; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/chosen.jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.dataTables.min.js" type="text/javascript" defer ></script>
    <script src="js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="js/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/axios.min.js" type="text/javascript"></script>

    <!-- CHOSEN SELECT -->
    <script type="text/javascript">
        $(function() {
            $('.chosen-select').chosen();
        });
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\INDOGETJOB\resources\views/layouts/app.blade.php ENDPATH**/ ?>