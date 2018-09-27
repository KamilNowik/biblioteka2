
<?php $__env->startSection('content'); ?>
<h1>Edycja</h1>
<div class="edit">
    
    <?php echo Form::model($book,['method'=>'PATCH', 'action' => ['BooksController@update', $book->id]]); ?>

    
       <?php echo $__env->make('books.form', ['buttonText' => 'Zapisz zmiany'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('books.form_errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo Form::close(); ?>

</div>
 <br>	
<a href="http://biblioteka2.test">Powrót</a>     
<?php $__env->stopSection(); ?>     
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>