
<?php $__env->startSection('content'); ?>
<div class="container m-5">
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      <form action="<?php echo e(route('pupils.update', $pupil->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($pupil->id); ?>" id="id" />
        <label>First Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($pupil->name); ?>" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" value="<?php echo e($pupil->lastname); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    <br>
    <a class="btn btn-primary" href="<?php echo e(route('pupils.index')); ?>">Back</a>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pupils.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/pupils/edit.blade.php ENDPATH**/ ?>