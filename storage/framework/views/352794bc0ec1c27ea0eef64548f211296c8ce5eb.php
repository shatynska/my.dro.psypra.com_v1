<?php $__env->startSection('content'); ?>
<h1>
    <?php echo e($heading); ?>

</h1>
<?php if (! (count($listings) == 0)): ?>
<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
    <a href="/listings/<?php echo e($listing['id']); ?>">
        <?php echo e($listing['title']); ?>

    </a>
</h3>
<p>
    <?php echo e($listing['description']); ?>

</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<p>No listing found</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my.dro.psypra.com/current/resources/views/welcome.blade.php ENDPATH**/ ?>