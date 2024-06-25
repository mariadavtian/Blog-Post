
<?php $__env->startSection("content"); ?>


<div class=" sm:items-center py-4 sm:pt-0 my-5">
    <?php if(count($guitar) > 2): ?>
        <?php $__currentLoopData = $guitar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guitars): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>

            <a href="<?php echo e(route('guitars.show', ['guitar' => $guitars['id']])); ?>"> 
            <h3> <?php echo e($guitars['name']); ?> </h3>
            </a>
            <ul>
                <li>
                 made by : <?php echo e($guitars['brand']); ?>

                </li>
            </ul>
            </h2>
        </div>
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
    <h2>
        There are no guitars here:)
    </h2>
    <?php endif; ?>
</div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/guitars/index.blade.php ENDPATH**/ ?>