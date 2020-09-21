<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-2 offset-10">
                <a href="<?php echo e(route('create')); ?>" class="btn btn-info">Création d'un utilisateur</a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Crée le</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td><?php echo e($user['name']); ?></td>
                                <td><?php echo e($user['email']); ?></td>
                                <td><?php echo e($user['created_at']); ?></td>
                                <td>
                                   <a class="btn btn-warning" href="#">Modifier</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
                <?php echo e($users->links()); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/wac/MVC_Free_Ads/FreeAds/resources/views/indexx.blade.php ENDPATH**/ ?>