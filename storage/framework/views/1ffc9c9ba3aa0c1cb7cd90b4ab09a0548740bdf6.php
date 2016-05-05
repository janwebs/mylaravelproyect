<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasks</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Tasks</a>
        </div>
        <div class="nav navbar-nav navbar-right">
          <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
          <li><a href="<?php echo e(route('tasks.index')); ?>">Tasks</a></li>
        </div>
      </div>
    </nav>

    <main>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>

  </body>
</html>