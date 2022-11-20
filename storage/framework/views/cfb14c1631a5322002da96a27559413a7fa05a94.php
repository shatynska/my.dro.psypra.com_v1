<h1>
    <?php echo e($heading); ?>

</h1>
<?php if (! (count($listings) == 0)): ?>
<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h2>
    <a href="/listings/<?php echo e($listing['id']); ?>">
        <?php echo e($listing['title']); ?>

    </a>
</h2>
<p>
    <?php echo e($listing['description']); ?>

</p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<p>No listing found</p>
<?php endif; ?>
<?php /**PATH /var/www/resources/views/welcome.blade.php ENDPATH**/ ?>