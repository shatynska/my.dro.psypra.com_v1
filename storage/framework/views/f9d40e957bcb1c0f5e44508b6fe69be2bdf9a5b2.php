<?php $__env->startSection('content'); ?>
<div class="row">

<div class="col-4">
    <img src="<?php echo e(asset('images/no-image.jpg')); ?>" alt="" class="img-fluid">
</div>


<div class="col-8">
    <h1>
        <?php echo e($specialist->name); ?> <?php echo e($specialist->last_name); ?>

    </h1>
    <p>
        <?php echo e($specialist->year_of_birth); ?>

    </p>
    <p>
        <?php echo e($specialist->year_of_starting); ?>

    </p>
    <p>
        <?php echo e($specialist->about_text); ?>

    </p>
    <p>
        <?php echo e($specialist->education_text); ?>

    </p>
    <p>
        <?php echo e($specialist->doesnt_work_with); ?>

    </p>
</div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my.dro.psypra.com/current/resources/views/specialist.blade.php ENDPATH**/ ?>