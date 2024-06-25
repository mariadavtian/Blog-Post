
<?php $__env->startSection("content"); ?>

<div>
    <h3> <?php echo e($guitar['name']); ?> </h3>
        <ul>
            <li>
                made by : <?php echo e($guitar['brand']); ?>

            </li>
        </ul>
 </div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/guitars/show.blade.php ENDPATH**/ ?>