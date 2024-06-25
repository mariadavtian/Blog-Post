
<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">First Name : <?php echo e($pupil->name); ?></h5>
        <p class="card-text">Last Name : <?php echo e($pupil->lastname); ?></p>
  </div>
    <a class="btn btn-primary" href="<?php echo e(route('pupils.index')); ?>">Back</a>
    </hr>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pupils.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/pupils/show.blade.php ENDPATH**/ ?>