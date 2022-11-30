<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="row">
<div class="col">
    <h1>
        <?php echo e($specialist->name); ?> <?php echo e($specialist->last_name); ?>

    </h1>
</div>
</div>
<div class="row">
<div class="col-md-6 col-xl-4">
    <img src="<?php echo e(asset('images/shatynska_big.png')); ?>" alt="" class="img-fluid">
</div>


<div class="col-6">
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

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>


<?php /**PATH /var/www/my.dro.psypra.com/current/resources/views/specialists/show.blade.php ENDPATH**/ ?>