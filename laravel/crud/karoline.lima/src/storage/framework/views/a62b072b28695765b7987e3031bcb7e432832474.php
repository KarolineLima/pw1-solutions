<?php $__env->startSection('title', 'Create Alumnus'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    Add Alumnus
  </div>
  <div class="card-body">
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
    <?php endif; ?>
    <form method="post" action="<?php echo e(route('usuarios.store')); ?>">
      <div class="form-group">
        <?php echo csrf_field(); ?>
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" />
      </div>

      <button type="submit" class="btn btn-primary">Create Usuarios</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/usuarios/create.blade.php ENDPATH**/ ?>