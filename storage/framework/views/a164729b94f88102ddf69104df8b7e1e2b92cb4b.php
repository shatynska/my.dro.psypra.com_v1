<?php $__env->startSection('content'); ?>

<h1>
    <?php echo e($listing['title']); ?>

</h1>
<p>
    <?php echo e($listing['description']); ?>

</p>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my.dro.psypra.com/current/resources/views/listing.blade.php ENDPATH**/ ?>