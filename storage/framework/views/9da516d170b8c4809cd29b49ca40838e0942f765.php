<?php $__env->startSection('content'); ?>
<h1>
    <?php echo e($heading); ?>

</h1>
<?php if (! (count($specialists) == 0)): ?>
<?php $__currentLoopData = $specialists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>
    <a href="/specialists/<?php echo e($specialist['id']); ?>">
        <?php echo e($specialist['name']); ?>

    </a>
</h3>
<p>
    <?php echo e($specialist['about_text']); ?>

</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<p>No specialist found</p>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/my.dro.psypra.com/current/resources/views/specialists.blade.php ENDPATH**/ ?>