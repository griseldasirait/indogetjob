
<?php $__env->startSection('title', 'DAFTAR'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top:6%;">
    <div class="row">
        <div class="col" style="margin-right:6%;">
            <h2 align="center" style="color:#001f90; font-weight:bold; margin-bottom:7.5%;">DAFTAR</h2>
            <br>
            <div class="container"  style="padding:0; margin:0 auto;">
                <div class="btn-group btn-group-lg btn-block text-center">
                    <button type="button" class="btn btn-outline-primary" style="border-radius: 10px 10px 10px 10px;">Pelamar Kerja</button>
                    <button type="button" class="btn btn-outline-primary active" style="border-radius: 10px 10px 10px 10px;">Perusahaan</button>
                </div>
            </div>
            <br>
            <form action="" method="POST">
                <div class="form-group" style="margin-top:3.5%;">
                    <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama perusahaan">
                </div>
                <div class="form-group" style="margin-top:7.5%;">
                    <input type="email" class="form-control" name="email_perusahaan" placeholder="Email">
                </div>
                <div class="form-group" style="margin-top:7.5%;">
                    <input type="password" class="form-control" name="password_perusahaan" placeholder="Password">
                </div>
                <div class="container" style="margin-top:7.5%;">
                    <div class="text-center">
                        <input class="btn btn-outline-success btn-lg" type="submit" name="daftar" value="DAFTAR" style="border-radius: 10px 10px 10px 10px;">
                    </div>
                </div>
            </form>
        </div>
        <div class="col" style="margin-left:6%;">
            <img src="<?php echo e(asset('img/drawkit-grape-pack-illustration-7.svg')); ?>" alt="">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\INDOGETJOB\resources\views/masuk.blade.php ENDPATH**/ ?>