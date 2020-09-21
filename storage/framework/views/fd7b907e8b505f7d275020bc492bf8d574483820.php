<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><br>
<div class="card" style="width: 100%;">
  <img class="card-img-top" src="https://via.placeholder.com/350x150" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($ad->title); ?></h5>
    <small><?php echo e(Carbon\Carbon::parse($ad->created_at)->diffForHumans()); ?></small>
    <p class="card-text text-info"><?php echo e($ad->localisation); ?></p>
    <p class="card-text"><?php echo e($ad->description); ?></p>
    <a href="#" class="btn btn-primary">Voir l'annonce</a>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo e($ads->links()); ?>

</div>
</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wac/MVC_Free_Ads/FreeAds/resources/views/ads.blade.php ENDPATH**/ ?>