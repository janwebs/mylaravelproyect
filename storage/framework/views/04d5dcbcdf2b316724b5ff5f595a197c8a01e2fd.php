<?php $__env->startSection('content'); ?>

<h1>Task List</h1>
<p class="lead">Here's a list of all your tasks. <a href="/tasks/create">Add a new one?</a></p>
<hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>