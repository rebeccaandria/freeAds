<?php $__env->startSection('content'); ?>
<div class="container">
<h1>Deposer une annonce</h1>
<hr>
<form method="POST" action="<?php echo e(route('ad.store')); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-group">
      <label for="title">Titre de l'annonce</label>
    <input type="text" class="form-control <?php echo e($errors->has('title') ? 'is-invalid': ''); ?>" id="title" aria-describedby="title" name="title">
    <?php if($errors->has('title')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('title')); ?></span>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="description">Description de l'annonce</label>
    <textarea name="description" class="form-control <?php echo e($errors->has('description') ? 'is-invalid': ''); ?>" id="description" cols="30" rows="10"></textarea>
    <?php if($errors->has('description')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('description')); ?></span>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="localisation">Localisation</label>
    <input type="text" class="form-control <?php echo e($errors->has('localisation') ? 'is-invalid': ''); ?>" id="localisation" name="localisation">
    <?php if($errors->has('localisation')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('localisation')); ?></span>
    <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="price">Prix</label>
    <input type="text" class="form-control <?php echo e($errors->has('price') ? 'is-invalid': ''); ?>" id="price" name="price">
    <?php if($errors->has('price')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('price')); ?></span>
    <?php endif; ?>
  </div>
 <?php if(auth()->guard()->guest()): ?>
<h1>Vos informations</h1>
<hr>
<div class="form-group">
    <label for="name">Votre nom</label>
    <input type="text" class="form-control<?php echo e($errors->has('name') ? 'is-invalid': ''); ?>" id="name" name="name"> 
    <?php if($errors->has('name')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('name')); ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="email">Votre email</label>
    <input type="email" class="form-control <?php echo e($errors->has('email') ? 'is-invalid': ''); ?>" id="email" name="email">
    <?php if($errors->has('email')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('email')); ?></span>
    <?php endif; ?>
</div>
<div class="form-group">
    <label for="password">Mot de passe</label>
    <input type="password" class="form-control <?php echo e($errors->has('password') ? 'is-invalid': ''); ?>" id="password" name="password">
    <?php if($errors->has('password')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('password')); ?></span>
    <?php endif; ?>
  </div>
<div class="form-group">
    <label for="password-confirm">Confirmation du mot de passe</label>
    <input type="password" class="form-control <?php echo e($errors->has('password_confirmation') ? 'is-invalid': ''); ?> " id="password_confirmation" name="password-confirm">
    <?php if($errors->has('password_confirmation')): ?>
    <span class="invalid-feedback"><?php echo e($errors->first('password_confirmation')); ?></span>
    <?php endif; ?>
  </div>
 <?php endif; ?>
  <button type="submit" class="btn btn-primary">Soumettre notre annonce</button>
</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wac/MVC_Free_Ads/FreeAds/resources/views/createAd.blade.php ENDPATH**/ ?>