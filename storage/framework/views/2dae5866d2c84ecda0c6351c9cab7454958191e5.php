
<?php $__env->startSection('content'); ?>

<h1>Dodaj nową książkę</h1>
<div class="edit">
    
    <?php echo Form::open(['url' => 'books']); ?>

    
        <?php echo $__env->make('books.form', ['buttonText' => 'Dodaj książkę'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('books.form_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo Form::close(); ?>

</div>
<br>
<a href="http://biblioteka2.test">Powrót</a>  
<?php $__env->stopSection(); ?>        
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>