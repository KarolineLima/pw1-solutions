<?php $__env->startSection('title', 'Edit Usuario'); ?>

<?php $__env->startSection('content'); ?>
<div class="card">
  <div class="card-header">
    Edit Usuario
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
    <form method="post" action="<?php echo e(route('usuarios.update', $usuario)); ?>">
      <div class="form-group">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo e($usuario->name); ?>" />
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo e($usuario->email); ?>" />
      </div>
      
      <button type="submit" class="btn btn-primary">Update Usuario</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/usuarios/edit.blade.php ENDPATH**/ ?>