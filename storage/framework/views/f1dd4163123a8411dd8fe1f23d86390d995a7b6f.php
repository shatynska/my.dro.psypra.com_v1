use App\Models\Specialty;

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
    <h1 class="mb-2">
        <?php echo e($specialist->name); ?> <?php echo e($specialist->last_name); ?>

    </h1>
    <h4 class="mb-2">
        <?php $__currentLoopData = $specialist->specialties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $specialty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($specialty->title); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </h4>
</div>

</div>
<div class="row">
<div class="col-md-6 col-xl-4">
    <img src="<?php echo e(asset('images/shatynska_big.png')); ?>" alt="" class="img-fluid my-2">
</div>


<div class="col-md-6 col-xl-4">
    <h6>
        форми роботи
    </h6>
    <p>
        <?php $__currentLoopData = $specialist->quantities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quantity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($quantity->title); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
    <p>
        <?php 
            echo 2022-$specialist->year_of_birth 
        ?> 
        р.
    </p>
    <p>
        початок практиктики: <?php echo e($specialist->year_of_starting); ?>р.
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