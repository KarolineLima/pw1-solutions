<?php $__env->startSection('title', 'Usuarios'); ?>

<?php $__env->startSection('content'); ?>
<?php if(session()->get('success')): ?>
<div class="alert alert-success">
  
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
<?php endif; ?>
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Email</td>
      <td colspan="2">Action</td>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($usuario->id); ?></td>
      <td><?php echo e($usuario->name); ?></td>
      <td><?php echo e($usuario->email); ?></td>
      <td><a href="<?php echo e(route('usuarios.edit', $usuario->id)); ?>" class="btn btn-primary" role="button">Edit</a></td>
      <td>
        <form action="<?php echo e(route('usuarios.destroy', $usuario->id)); ?>" method="post">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<a href="<?php echo e(route('usuarios.create')); ?>" class="btn btn-primary" role="button">Add usuario</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/usuarios/index.blade.php ENDPATH**/ ?>