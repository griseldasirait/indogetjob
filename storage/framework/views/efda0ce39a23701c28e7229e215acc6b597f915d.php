
<?php $__env->startSection('title', 'MASUK'); ?>

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top:6%;">
    <div class="row">
        <div class="col" style="margin-right:6%;">
            <h2 align="center" style="color:#001f90; font-weight:bold; margin-bottom:7.5%;">MASUK</h2>
            <br>
            <div class="container"  style="padding:0; margin:0 auto;">
                <div class="btn-group btn-group-lg btn-block text-center">
                    <button type="button" class="btn btn-outline-primary" style="border-radius: 10px 10px 10px 10px;">Pelamar Kerja</button>
                    <button type="button" class="btn btn-outline-primary active" style="border-radius: 10px 10px 10px 10px;">Perusahaan</button>
                </div>
            </div>
            <br>
            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

                <!-- TAMPILKAN NOTIF JIKA GAGAL LOGIN  -->
                <?php if(session('error')): ?>
                    <div class="alert alert-danger" role="alert"><?php echo e(session('error')); ?></div>
                <?php endif; ?>
                <div class="form-group" style="margin-top:7.5%;">
                    <input type="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email" required>
                    <?php if($errors->has('email')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('email')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group" style="margin-top:7.5%;">
                    <input type="password" class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>" name="password" placeholder="Password" required>
                    <?php if($errors->has('password')): ?>
                        <div class="invalid-feedback">
                            <?php echo e($errors->first('password')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="container" style="margin-top:8%;">
                    <div class="text-center">
                        <button class="btn btn-outline-primary btn-lg" type="submit" style="border-radius: 10px 10px 10px 10px;">MASUK</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col" style="margin-left:6%;">
            <img src="<?php echo e(asset('img/drawkit-grape-pack-illustration-19.svg')); ?>" alt="">
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\INDOGETJOB\resources\views/login.blade.php ENDPATH**/ ?>