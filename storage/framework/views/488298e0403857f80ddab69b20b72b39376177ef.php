<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    

    <title>Biblioteka</title>
    
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>    
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
