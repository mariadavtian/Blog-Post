
<?php $__env->startSection("content"); ?>
<div class="container my-5">
<div class="row">
  <div class="card" >
          <div class="card-header my-2"> Pupils Crud</div>
          <div class="card-body">
          <a href="<?php echo e(route('pupils.create')); ?>" class="btn btn-success btn-sm" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Students
          </a>
          <br/>
          <br/>
            <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Lastname</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $pupils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pupil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td> <?php echo e($pupil->name); ?></td>
                    <td><?php echo e($pupil->lastname); ?></td>
                    
                    <td>
                      <form method="post" action="<?php echo e(route('pupils.destroy', $pupil->id)); ?>">
                      <a href="<?php echo e(route('pupils.show', $pupil->id)); ?>" class="btn btn-info btn-sm">
                      <i class="fa-solid fa-eye"></i> View
                      </a>
                      <a href="<?php echo e(route('pupils.edit', $pupil->id)); ?>" class="btn btn-primary btn-sm">
                      <i class="fa-solid fa-eye" ></i>Edit
                      </a>

                      <?php echo e(method_field('DELETE')); ?>

                      <?php echo e(csrf_field()); ?>

                      <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)">
                        <i class="fa-regular fa-trash-can"></i>  Delete
                      </button>
                      </form>
                    </td>
              
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
        </div>
  </div>  
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("pupils.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/pupils/index.blade.php ENDPATH**/ ?>