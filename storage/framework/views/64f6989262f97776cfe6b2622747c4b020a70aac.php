<?php $__env->startSection('content'); ?>
<div class="container">
<?php if(session()->has('success')): ?>
<div class="alert alert-success">
<?php echo e(session()->get('success')); ?>

</div>
<?php endif; ?>
<h1>BECCAFREEADS</h1>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wac/MVC_Free_Ads/FreeAds/resources/views/welcome.blade.php ENDPATH**/ ?>