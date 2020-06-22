
<?php $__env->startSection('title', 'HOME'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    SELAMAT DATANG <?php echo e(Auth::user()->name); ?> !!!
    <br>
    <a href="<?php echo e(route('logout')); ?>">Log Out</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\INDOGETJOB\resources\views/home.blade.php ENDPATH**/ ?>