

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      <form action="<?php echo e(route('pupils.store')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>First Name</label></br>
        <input type="text" name="name" id="name" class="form-control" placeholder="First name"></br>
        <label>Lastname</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    <br>
    <a class="btn btn-primary" href="<?php echo e(route('pupils.index')); ?>">Back</a>
  </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('pupils.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/pupils/create.blade.php ENDPATH**/ ?>